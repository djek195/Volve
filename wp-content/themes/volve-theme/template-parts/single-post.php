<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Your_Theme
 */
$author_id = get_post_field('post_author', $post->ID);

$args = array(
    'author' => $author_id,
    'orderby' => 'post_date',
    'order' => 'ASC',
    'posts_per_page' => -1
);
?>

<div class="post">
    <div class="blog-header">
        <div class="blog-header__wrapper">
            <div class="blog-header__list">
                <a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                   class="<?= is_home() ? 'active-link' : ''; ?>">All categories</a>
                <?php
                $categories = get_categories();
                $current_post_categories = get_the_category();
                $primary_category = '';
                foreach ($current_post_categories as $cat) {
                    if ($cat->parent == 0) {
                        $primary_category = $cat->name;
                        break;
                    }
                }
                foreach ($categories as $category): ?>
                    <a href="<?= esc_url(get_category_link($category->term_id)); ?>"
                       class="<?= $category->name == $primary_category ? 'active-link' : ''; ?>">
                        <?= esc_html($category->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="post__wrapper">

        <div class="post__title">
            <!-- Add post modification time -->
            <p class="post__title--date"><?php the_modified_time('j F Y g:i a'); ?></p>
            <h1><?php the_title(); ?></h1>
            <ul class="post__title--tags">
                <?php
                $post_tags = get_the_tags();
                if ($post_tags) {
                    foreach ($post_tags as $tag) {
                        echo '<li><span class="circle"></span>' . $tag->name . '</li>';
                    }
                }
                ?>
            </ul>
            <p class="post__title--author"><?php echo 'by ' . get_the_author(); ?></p>
        </div>

        <div class="post__content">
            <?php the_content(); ?>
            <a class="post__linkedin" target="_blank" rel="nofollow noopener"
               href="https://www.linkedin.com/sharing/share-offsite/?url=<?= esc_url(get_permalink()) ?>">
                <img src="<?= get_template_directory_uri(); ?>/assets/icons/linkedin.png" alt="LinkedIn">
            </a>
            <div class="post__author">
                <a class="post__author--avatar" href="<?= esc_url(get_author_posts_url($author_id)); ?>">
                    <?= get_avatar($author_id); ?>
                </a>
                <div class="post__author--name">
                    <h5>
                        <a href="<?= esc_url(get_author_posts_url($author_id)); ?>">
                            <?= esc_html(get_the_author_meta('display_name', $author_id)); ?>
                        </a>
                    </h5>
                    <span class="post__author--position">
            <?= esc_html(carbon_get_user_meta(get_the_author_meta('ID'), 'author_jobtitle')); ?>
        </span>
                </div>
                <div class="post__author--description">
                    <p>
                        <?= esc_html(get_the_author_meta('description')); ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="post__extra-content">
            <?php
            get_template_part('inc/templates/trial');
            ?>
            <div class="read-more__wrapper">
                <h2 class="read-more__title">Read more</h2>
                <div class="swiper read-more__slider">
                    <div class="swiper-wrapper">
                        <?php
                        $current_category_id = get_queried_object()->term_id;
                        $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => 4,
                            'order' => 'DESC',
                            'orderby' => 'date',
                            'category_name' => $category,
                            'post__not_in' => array($post->ID)
                        );
                        $query = new WP_Query($args);

                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                ?>
                                <div class="read-more__slide swiper-slide">
                                    <a href="<?= esc_url(get_permalink()); ?>">
                                        <div class="read-more__slide--image">
                                            <?php the_post_thumbnail('thumbnail-image-sm'); ?>
                                        </div>
                                    </a>
                                    <div class="read-more__slide--text-content">
                                        <a href="<?= esc_url(get_permalink()); ?>">
                                            <h3 class="read-more__slide--text-content-title">
                                                <?= get_the_title(); ?>
                                            </h3>
                                        </a>
                                    </div>
                                </div>
                                <?php
                            }
                            wp_reset_postdata();
                        }
                        ?>
                    </div>
                </div>
                <div class="read-more__buttons">
                    <img class="read-more__buttons--prev"
                         src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                         alt="Previous"
                    >
                    <img class="read-more__buttons--next"
                         src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-next.svg"
                         alt="Next"
                    >
                </div>
            </div>
        </div>
    </div>
</div>