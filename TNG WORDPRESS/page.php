<?php
/**
 * The template for displaying all pages
 */

get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

<div class="section_hero">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-hero">
                <h1 class="hero-heading-2"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>

<?php if (has_post_thumbnail()) : ?>
<div class="section_picture-full-width">
    <div class="image-wrapper">
        <div class="image-holder-hero home" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>');"></div>
        <div style="height:100%" class="image-cover-hero"></div>
    </div>
</div>
<?php endif; ?>

<div class="section_home-over-ons">
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <div class="w-layout-grid grid-basic">
                    <div class="section-content-wrapper">
                        <article class="page-content">
                            <?php the_content(); ?>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; ?>

<?php get_footer(); ?>
