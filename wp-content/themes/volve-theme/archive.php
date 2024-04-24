<?php
$categories = get_categories();


get_header();
?>
    <div class="archive__wrapper">
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
        <div class="archive__title">
            <h1>
                <?php
                if (is_category()) {
                    single_cat_title();
                } else {
                    echo 'All posts';
                }
                ?>
            </h1>

            <div class="categories__search">
                <?php get_template_part('inc/templates/search-form'); ?>
            </div>
        </div>
        <div class="archive__content">
            <?php
            // Get posts by category
            if (is_category()) {
                $current_category = single_cat_title("", false);
                $args = array(
                    'category_name' => $current_category
                );
                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()): $query->the_post(); ?>
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
                }
            }
            ?>
        </div>
        <div class="archive__button">
            <button>Load more</button>
        </div>

        <div class="blog__extra-content">
            <?php
            get_template_part('inc/templates/categories');
            get_template_part('inc/templates/trial');
            ?>
        </div>
    </div>

<?php get_footer(); ?>