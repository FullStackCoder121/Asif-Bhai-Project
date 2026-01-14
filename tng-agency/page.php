<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php get_header(); ?>

<main class="main-wrapper">
    <div class="section_hero">
        <div class="padding-global">
            <div class="container-large">
                <div class="padding-hero">
                    <h1 class="hero-heading-2"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div class="padding-global">
        <div class="container-medium">
            <div class="padding-section-large">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php
                    endwhile;
                else :
                ?>
                
                <div class="no-content">
                    <h2>Page Not Found</h2>
                    <p>Sorry, but the page you're looking for doesn't exist.</p>
                </div>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

</body>
</html>
