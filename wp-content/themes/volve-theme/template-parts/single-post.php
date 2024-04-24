<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Your_Theme
 */
?>

<div class="post">
    <div class="post__wrapper">
        <div class="blog-header">
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
        </div>
    </div>
</div>


