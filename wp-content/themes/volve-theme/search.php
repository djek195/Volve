<?php

$search_query = get_search_query();
$args = array(
    's' => $search_query,
    'post_type' => 'post'
);

$query = new WP_Query($args);

get_header();
?>

    <div class="search__wrapper">
        <div class="search__content">
            <div class="blog-header">
                <div class="blog-header__list">
                    <a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                       class="<?= is_home() ? 'active-link' : ''; ?>">All categories</a>
                    <?php
                    $categories = get_categories();
                    $current_category = single_cat_title("", false);
                    foreach ($categories as $category): ?>
                        <a href="<?= esc_url(get_category_link($category->term_id)); ?>"
                           class="<?= is_category($category->name) ? 'active-link' : ''; ?>">
                            <?= esc_html($category->name); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="search__title">
                <h1>Search Results:</h1>
                <div class="search__title--form">
                    <?php get_template_part('inc/templates/search-form'); ?>
                </div>
            </div>

            <div class="search__posts">
                <?php
                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post(); ?>
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
                            <div class="author-block">
                                <div class="author-block__avatar">
                                    <?= get_avatar(get_the_author_meta('ID')); ?>
                                </div>
                                <div class="author-block__name">
                                    <a href="<?= esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                        <?= esc_html(get_the_author()); ?>
                                    </a>
                                    <p class="author-block__bio">
                                        <?= esc_html(carbon_get_user_meta(get_the_author_meta('ID'), 'author_jobtitle')); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else: ?>
                    <div class="search__no-results">
                        <h2>No results found</h2>
                        <p>Sorry, but nothing matched your search terms. Please try again with some different
                            keywords.</p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

<?php
get_template_part('inc/templates/trial');
get_footer();