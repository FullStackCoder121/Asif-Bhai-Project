    </div><!-- .page-wrapper -->

    <?php wp_footer(); ?>

    <!-- GSAP and Animation Scripts -->
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
    window.addEventListener("DOMContentLoaded", (event) => {
        setTimeout(() => {
            jQuery("[js-line-animation]").each(function (index) {
                gsap.set(jQuery(this), { autoAlpha: 1 });
                let textEl = jQuery(this);
                let textContent = jQuery(this).text();
                let tl;

                function splitText() {
                    new SplitType(textEl, { types: "lines", tagName: "span" });
                    textEl.find(".line").each(function (index) {
                        let lineContent = jQuery(this).html();
                        jQuery(this).html("");
                        jQuery(this).append(`<span class="line-inner" style="display: block;">${lineContent}</span>`);
                    });
                    tl = gsap.timeline({
                        scrollTrigger: {
                            trigger: textEl,
                            start: "top 80%",
                            end: "bottom bottom",
                            toggleActions: "none play none none"
                        }
                    });
                    tl.fromTo(textEl.find(".line-inner"), { yPercent: 100 }, { yPercent: 0, duration: 0.5, stagger: { amount: 0.2, ease: "power2.out" } });
                }
                splitText();

                let windowWidth = window.innerWidth;
                window.addEventListener("resize", function () {
                    if (windowWidth !== window.innerWidth) {
                        windowWidth = window.innerWidth;
                        tl.kill();
                        textEl.text(textContent);
                        splitText();
                    }
                });
            });
        }, 700);
    });

    // MARQUEE POWER-UP
    window.addEventListener("DOMContentLoaded", (event) => {
        // attribute value checker
        function attr(defaultVal, attrVal) {
            const defaultValType = typeof defaultVal;
            if (typeof attrVal !== "string" || attrVal.trim() === "") return defaultVal;
            if (attrVal === "true" && defaultValType === "boolean") return true;
            if (attrVal === "false" && defaultValType === "boolean") return false;
            if (isNaN(attrVal) && defaultValType === "string") return attrVal;
            if (!isNaN(attrVal) && defaultValType === "number") return +attrVal;
            return defaultVal;
        }
        // marquee component
        jQuery("[tr-marquee-element='component']").each(function (index) {
            let componentEl = jQuery(this),
                panelEl = componentEl.find("[tr-marquee-element='panel']"),
                triggerHoverEl = componentEl.find("[tr-marquee-element='triggerhover']"),
                triggerClickEl = componentEl.find("[tr-marquee-element='triggerclick']");
            let speedSetting = attr(70, componentEl.attr("tr-marquee-speed")),
                verticalSetting = attr(false, componentEl.attr("tr-marquee-vertical")),
                reverseSetting = attr(false, componentEl.attr("tr-marquee-reverse")),
                scrollDirectionSetting = attr(false, componentEl.attr("tr-marquee-scrolldirection")),
                scrollScrubSetting = attr(false, componentEl.attr("tr-marquee-scrollscrub")),
                moveDistanceSetting = -100,
                timeScaleSetting = 1,
                pausedStateSetting = false;
            if (reverseSetting) moveDistanceSetting = 100;
            let marqueeTimeline = gsap.timeline({ repeat: -1, onReverseComplete: () => marqueeTimeline.progress(1) });
            if (verticalSetting) {
                speedSetting = panelEl.first().height() / speedSetting;
                marqueeTimeline.fromTo(panelEl, { yPercent: 0 }, { yPercent: moveDistanceSetting, ease: "none", duration: speedSetting });
            } else {
                speedSetting = panelEl.first().width() / speedSetting;
                marqueeTimeline.fromTo(panelEl, { xPercent: 0 }, { xPercent: moveDistanceSetting, ease: "none", duration: speedSetting });
            }
            let scrubObject = { value: 1 };
            ScrollTrigger.create({
                trigger: "body",
                start: "top top",
                end: "bottom bottom",
                onUpdate: (self) => {
                    if (!pausedStateSetting) {
                        if (scrollDirectionSetting && timeScaleSetting !== self.direction) {
                            timeScaleSetting = self.direction;
                            marqueeTimeline.timeScale(self.direction);
                        }
                        if (scrollScrubSetting) {
                            let v = self.getVelocity() * 0.006;
                            v = gsap.utils.clamp(-60, 60, v);
                            let scrubTimeline = gsap.timeline({ onUpdate: () => marqueeTimeline.timeScale(scrubObject.value) });
                            scrubTimeline.fromTo(scrubObject, { value: v }, { value: timeScaleSetting, duration: 0.5 });
                        }
                    }
                }
            });
            function pauseMarquee(isPausing) {
                pausedStateSetting = isPausing;
                let pauseObject = { value: 1 };
                let pauseTimeline = gsap.timeline({ onUpdate: () => marqueeTimeline.timeScale(pauseObject.value) });
                if (isPausing) {
                    pauseTimeline.fromTo(pauseObject, { value: timeScaleSetting }, { value: 0, duration: 0.5 });
                    triggerClickEl.addClass("is-paused");
                } else {
                    pauseTimeline.fromTo(pauseObject, { value: 0 }, { value: timeScaleSetting, duration: 0.5 });
                    triggerClickEl.removeClass("is-paused");
                }
            }
            if (window.matchMedia("(pointer: fine)").matches) {
                triggerHoverEl.on("mouseenter", () => pauseMarquee(true));
                triggerHoverEl.on("mouseleave", () => pauseMarquee(false));
            }
            triggerClickEl.on("click", function () {
                !jQuery(this).hasClass("is-paused") ? pauseMarquee(true) : pauseMarquee(false);
            });
        });
    });

    // Contact Form Toggle
    jQuery(document).ready(function($) {
        $('[data-w-id="229f351e-4508-b011-4db4-97cc9369af2a"], [data-w-id="334516b1-beea-d61d-33f9-620a996289e2"], [data-w-id="3470fa71-63b7-6399-b667-a9156825c6e9"], [data-w-id="405e6a18-cad5-97da-6824-16c653b85d65"], [data-w-id="92225642-ed73-a390-03f2-3dd1436f7919"], [data-w-id="8a57617a-ff57-a635-2b1c-b578c72f39c1"], [data-w-id="8279b56a-df9c-1e92-0fee-4deb2d15b7ce"], [data-w-id="419b19cd-4b0d-4de3-456f-1510c26f522a"], [data-w-id="b23b9473-a8f9-301f-f36e-1f1a0faa5385"], [data-w-id="f4cc9390-a784-1c71-21d4-adc03d7e9fbe"]').on('click', function(e) {
            e.preventDefault();
            $('.section_contact').addClass('active');
            $('body').css('overflow', 'hidden');
        });

        $('[data-w-id="1ab37c44-77e8-4395-7166-80a0ebe378cf"]').on('click', function() {
            $('.section_contact').removeClass('active');
            $('body').css('overflow', 'auto');
        });

        // Mobile Menu Toggle
        $('[data-w-id="4677cb22-374d-8a85-b82d-bd2d9dcdceab"]').on('click', function() {
            $(this).toggleClass('active');
            $('.nav-mobile-parent').toggleClass('active');
        });

        // Page Loader
        $(window).on('load', function() {
            $('.page-loader').fadeOut('slow');
        });

        // Scroll Animations
        gsap.registerPlugin(ScrollTrigger);

        // Hero animations
        gsap.to('.hero-heading-2, .hero-paragraph', {
            y: 0,
            opacity: 1,
            duration: 1,
            stagger: 0.2,
            ease: 'power2.out',
            delay: 0.5
        });

        // Image reveal animations
        gsap.utils.toArray('.image-wrapper').forEach(wrapper => {
            gsap.to(wrapper, {
                y: 0,
                opacity: 1,
                duration: 1,
                scrollTrigger: {
                    trigger: wrapper,
                    start: 'top 80%',
                    end: 'bottom 20%',
                    toggleActions: 'play none none none'
                }
            });
        });

        // Animated headings
        gsap.utils.toArray('.h2-animated').forEach(heading => {
            gsap.from(heading, {
                y: 50,
                opacity: 0,
                duration: 0.8,
                scrollTrigger: {
                    trigger: heading,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
        });

        // Animated paragraphs
        gsap.utils.toArray('.paragraph-animated').forEach(paragraph => {
            gsap.from(paragraph, {
                y: 30,
                opacity: 0,
                duration: 0.8,
                delay: 0.2,
                scrollTrigger: {
                    trigger: paragraph,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                }
            });
        });

        // Image cover animations
        gsap.utils.toArray('.img-cover-body, .image-cover-hero').forEach(cover => {
            gsap.to(cover, {
                width: 0,
                duration: 1.2,
                ease: 'power2.inOut',
                scrollTrigger: {
                    trigger: cover,
                    start: 'top 80%',
                    toggleActions: 'play none none none'
                }
            });
        });
    });
    </script>

</body>
</html>
