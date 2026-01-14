        </main>
    </div>
    
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/js/webflow.schunk.36b8fb49256177c8.js" type="text/javascript" integrity="sha384-4abIlA5/v7XaW1HMXKBgnUuhnjBYJ/Z9C1OSg4OhmVw9O3QeHJ/qJqFBERCDPv7G" crossorigin="anonymous"></script>
    <script src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/js/webflow.schunk.43e3c73cbe26cc05.js" type="text/javascript" integrity="sha384-jewyiuhqS1oQSgp9PF+z2cC76Rz8b841FBSLf9ryyCClhrZbiP+QhSpWLdxwPKPh" crossorigin="anonymous"></script>
    <script src="https://cdn.prod.website-files.com/6601a33a428bb6f9b3c92728/js/webflow.1d698a72.73b34bf7d48a46fd.js" type="text/javascript" integrity="sha384-70W0r9iGPDJw/YVC66fzJ0KWLYzufeVuSGxKIlHXqzwqHgMMoeM69pR6D/X3+9cu" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/split-type"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    
    <script>
        window.addEventListener("DOMContentLoaded", (event) => {
            setTimeout(() => {
                $("[js-line-animation]").each(function(index) {
                    gsap.set($(this), {
                        autoAlpha: 1
                    });
                    let textEl = $(this);
                    let textContent = $(this).text();
                    let tl;

                    function splitText() {
                        new SplitType(textEl, {
                            types: "lines",
                            tagName: "span"
                        });
                        textEl.find(".line").each(function(index) {
                            let lineContent = $(this).html();
                            $(this).html("");
                            $(this).append(`<span class="line-inner" style="display: block;">${lineContent}</span>`);
                        });
                        tl = gsap.timeline({
                            scrollTrigger: {
                                trigger: textEl,
                                start: "top 80%",
                                end: "bottom bottom",
                                toggleActions: "none play none none"
                            }
                        });
                        tl.fromTo(textEl.find(".line-inner"), {
                            yPercent: 100
                        }, {
                            yPercent: 0,
                            duration: 0.5,
                            stagger: {
                                amount: 0.2,
                                ease: "power2.out"
                            }
                        });
                    }
                    splitText();

                    let windowWidth = window.innerWidth;
                    window.addEventListener("resize", function() {
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
            function attr(defaultVal, attrVal) {
                const defaultValType = typeof defaultVal;
                if (typeof attrVal !== "string" || attrVal.trim() === "") return defaultVal;
                if (attrVal === "true" && defaultValType === "boolean") return true;
                if (attrVal === "false" && defaultValType === "boolean") return false;
                if (isNaN(attrVal) && defaultValType === "string") return attrVal;
                if (!isNaN(attrVal) && defaultValType === "number") return +attrVal;
                return defaultVal;
            }
            
            $("[tr-marquee-element='component']").each(function(index) {
                let componentEl = $(this),
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
                let marqueeTimeline = gsap.timeline({
                    repeat: -1,
                    onReverseComplete: () => marqueeTimeline.progress(1)
                });
                if (verticalSetting) {
                    speedSetting = panelEl.first().height() / speedSetting;
                    marqueeTimeline.fromTo(panelEl, {
                        yPercent: 0
                    }, {
                        yPercent: moveDistanceSetting,
                        ease: "none",
                        duration: speedSetting
                    });
                } else {
                    speedSetting = panelEl.first().width() / speedSetting;
                    marqueeTimeline.fromTo(panelEl, {
                        xPercent: 0
                    }, {
                        xPercent: moveDistanceSetting,
                        ease: "none",
                        duration: speedSetting
                    });
                }
                let scrubObject = {
                    value: 1
                };
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
                                let scrubTimeline = gsap.timeline({
                                    onUpdate: () => marqueeTimeline.timeScale(scrubObject.value)
                                });
                                scrubTimeline.fromTo(scrubObject, {
                                    value: v
                                }, {
                                    value: timeScaleSetting,
                                    duration: 0.5
                                });
                            }
                        }
                    }
                });

                function pauseMarquee(isPausing) {
                    pausedStateSetting = isPausing;
                    let pauseObject = {
                        value: 1
                    };
                    let pauseTimeline = gsap.timeline({
                        onUpdate: () => marqueeTimeline.timeScale(pauseObject.value)
                    });
                    if (isPausing) {
                        pauseTimeline.fromTo(pauseObject, {
                            value: timeScaleSetting
                        }, {
                            value: 0,
                            duration: 0.5
                        });
                        triggerClickEl.addClass("is-paused");
                    } else {
                        pauseTimeline.fromTo(pauseObject, {
                            value: 0
                        }, {
                            value: timeScaleSetting,
                            duration: 0.5
                        });
                        triggerClickEl.removeClass("is-paused");
                    }
                }
                if (window.matchMedia("(pointer: fine)").matches) {
                    triggerHoverEl.on("mouseenter", () => pauseMarquee(true));
                    triggerHoverEl.on("mouseleave", () => pauseMarquee(false));
                }
                triggerClickEl.on("click", function() {
                    !$(this).hasClass("is-paused") ? pauseMarquee(true) : pauseMarquee(false);
                });
            });
        });
    </script>
    
    <?php wp_footer(); ?>
</body>
</html>
