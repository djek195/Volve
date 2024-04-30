<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alkima
 */


?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry-content'); ?>>
    <header class="entry-header">
        <?php
        if (is_singular()):
            the_title('<h1 class="entry-title">', '</h1>');
        else:
            the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        endif;
        ?>
    </header>

    <div class="wp-block-group">
        <div class="row flex-lg-row mb-3">
            <div class="col-12 col-lg-4">
                <!--                <div class="excerpt d-block d-lg-none">-->
                <!--                    --><?php //alkima_post_thumbnail(); ?>
                <!--                </div>-->
                <?php get_template_part('template-parts/sidebar', get_post_type()); ?>
            </div>
            <div class="col-12 col-lg-8">

                <div class="excerpt d-none d-lg-block">
                    <!--                    --><?php //alkima_post_thumbnail(); ?>
                </div>

                <?php the_content(); ?>
            </div>

            <?php get_template_part('templates/share', 'block'); ?>
        </div>
    </div>

    <?php
    $args = array(
        'post_type' => get_post_type(),
        'posts_per_page' => 8,
        'post__not_in' => array(get_the_ID())
    );
    $latest_posts = new WP_Query($args);
    if ($latest_posts->have_posts()): ?>
        <div class="posts-block">
            <h2 id="blog" class="wp-block-heading">
                <?= __('Latest Articles', 'alkima') . ':' ?>
            </h2>
            <div class="<?= get_post_type(); ?>-slider <?= get_post_type(); ?>__archive">
                <?php while ($latest_posts->have_posts()):
                    $latest_posts->the_post(); ?>
                    <?php get_template_part('template-parts/content', get_post_type()); ?>
                <?php endwhile; ?>
            </div>
        </div>
    <?php endif; ?>
</article>