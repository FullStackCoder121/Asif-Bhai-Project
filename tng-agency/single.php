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
        <div class="container-medium">
            <div class="padding-section-large">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-meta">
                            <span class="posted-on"><?php echo get_the_date(); ?></span>
                            <span class="byline"> by <?php the_author(); ?></span>
                            <?php if (has_category()) : ?>
                            <span class="cat-links">in <?php the_category(', '); ?></span>
                            <?php endif; ?>
                        </div>
                    </header>

                    <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                    <footer class="entry-footer">
                        <?php
                        if (has_tag()) :
                            the_tags('<div class="tags-links"><span>Tags:</span> ', ', ', '</div>');
                        endif;
                        ?>
                    </footer>
                </article>

                <?php
                    // Comments
                    if (comments_open() || get_comments_number()) :
                        comments_template();
                    endif;

                    endwhile;
                else :
                ?>
                
                <div class="no-content">
                    <h2>Nothing Found</h2>
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
