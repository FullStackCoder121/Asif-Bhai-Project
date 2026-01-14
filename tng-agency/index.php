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
    <div class="padding-global">
        <div class="container-large">
            <div class="padding-section-large">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>
                </article>

                <?php
                    endwhile;
                else :
                ?>
                
                <div class="no-content">
                    <h2>Nothing Found</h2>
                    <p>Sorry, but nothing matched your search terms. Please try again with different keywords.</p>
                </div>
                
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

</body>
</html>
