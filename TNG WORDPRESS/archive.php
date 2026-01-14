<?php
/**
 * The template for displaying archive pages
 */

get_header(); ?>

<div class="section_hero">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-hero">
                <h1 class="hero-heading-2"><?php the_archive_title(); ?></h1>
                <?php if (have_posts()) : ?>
                <p class="hero-paragraph"><?php the_archive_description(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="section_home-insights">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="w-layout-grid grid-basic">
                    <div class="section-content-wrapper">
                        <?php if (have_posts()) : ?>
                            <div class="insights_cms_wrapper">
                                <div class="grey-line-2"><div class="black-line"></div></div>
                                <div class="home-insights_coll">
                                    <?php while (have_posts()) : the_post(); ?>
                                    <div class="home-insights_item">
                                        <a href="<?php the_permalink(); ?>" class="insights_grid w-inline-block">
                                            <div class="insights_img-wrapper">
                                                <?php if (has_post_thumbnail()) : ?>
                                                <div style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>')" class="insights_img"></div>
                                                <?php endif; ?>
                                                <div style="width:100%;height:100%" class="img-cover-body"></div>
                                            </div>
                                            <div class="insights_top-text-wrapper">
                                                <div class="insights_top-text"><?php echo get_the_date(); ?></div>
                                                <div class="insights_top-text">•</div>
                                                <div class="insights_top-text"><?php the_category(', '); ?></div>
                                            </div>
                                            <div class="insights_text-bottom">
                                                <h3 class="insights_title"><?php the_title(); ?></h3>
                                            </div>
                                            <div class="insights_arrow-wrapper">
                                                <div class="arrow_articles w-embed">
                                                    <svg height="100%" viewBox="0 0 29 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M14.9411 0C15.8616 0 16.7822 -2.35114e-08 17.7027 0.0242742C17.5847 5.00049 21.196 9.7097 25.8932 10.8263C26.7665 11.1176 27.7106 11.0691 28.6312 11.1662C28.6312 12.1128 28.6312 13.0595 28.6312 13.982C26.8609 14.0791 25.067 14.3461 23.5092 15.2685C20.0159 17.1619 17.6791 21.07 17.6791 25.1481C16.7586 25.1481 15.838 25.1481 14.9411 25.1481C14.9175 20.803 16.9946 16.5308 20.4171 13.9577C13.6193 13.982 6.79784 13.9577 0 13.9577C0.0236036 13.0353 0.0236036 12.0886 0 11.1419C6.77424 11.2147 13.5721 11.1662 20.3699 11.1904C17.986 9.24849 16.0741 6.60259 15.3659 3.54404C15.0827 2.40315 14.9647 1.18944 14.9411 0Z" fill="currentcolor"/>
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="grey-line-2 _2rem"><div class="black-line"></div></div>
                                    </div>
                                    <?php endwhile; ?>
                                </div>
                                <div class="button-wrapper">
                                    <?php the_posts_pagination(); ?>
                                </div>
                            </div>
                        <?php else : ?>
                            <p>Geen berichten gevonden.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
