<?php
/**
 * The template for displaying author pages (author.php)
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 *
 */
$author_id = get_post_field('post_author', $post->ID);

// Запит для отримання постів автора
$args = array(
    'author' => $author_id,
    'orderby' => 'post_date',
    'order' => 'ASC',
    'posts_per_page' => -1
);

$author_posts = new WP_Query($args);

get_header();
?>

    <div class="author__wrapper">
        <div class="blog-header">
            <div class="blog-header__wrapper">
                <div class="blog-header__list">
                    <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                       class="<?php echo is_home() ? 'active-link' : ''; ?>">All categories</a>
                    <?php
                    $categories = get_categories();
                    $current_category = single_cat_title("", false);
                    foreach ($categories as $category): ?>
                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                           class="<?php echo is_category($category->name) ? 'active-link' : ''; ?>">
                            <?php echo esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="author__content">
            <div class="author__about">
                <div class="author__about--avatar">
                    <?= get_avatar($author_id); ?>
                </div>
                <div class="author__about--name">
                    <h1>
                        <?= esc_html(get_the_author_meta('display_name', $author_id)); ?>
                    </h1>
                    <span class="author__about--position">
                        <?= esc_html(carbon_get_user_meta(get_the_author_meta('ID'), 'author_jobtitle')); ?>
                    </span>
                </div>
                <div class="author__about--description">
                    <p>
                        <?= esc_html(get_the_author_meta('description')); ?>
                    </p>
                </div>
            </div>
            <div class="author__posts">
                <?php
                if ($author_posts->have_posts()) :
                    while ($author_posts->have_posts()) : $author_posts->the_post(); ?>
                        <div class="archive__content--post">
                            <?php
                            if (has_post_thumbnail()) {
                                ?>
                                <div class="archive__content--post-image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('thumbnail-image-lg'); ?>
                                    </a>
                                </div>
                                <?php
                            }
                            ?>
                            <div class="archive__content--post-title">
                                <a class="category-name"
                                   href="<?= esc_url(get_category_link(get_the_category(get_post()->ID)[0]->term_id)); ?>">
                                    <?= esc_html(get_the_category(get_post()->ID)[0]->name); ?>
                                </a>
                                <h4>
                                    <a href="<?= esc_url(get_permalink()); ?>"><?= wp_trim_words(get_the_title(), 46, '...'); ?></a>
                                </h4>
                            </div>
                            <div class="archive__content--post-description">
                                <p><?= wp_trim_words(get_the_excerpt(), 148, '...'); ?></p>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <p><?php _e('No posts by this author.'); ?></p>
                <?php endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>

    </div>

<?= get_template_part('inc/templates/trial'); ?>
<?php get_footer(); ?>