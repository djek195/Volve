<?php
$categories = get_categories();

get_header();
?>
    <div class="categories">
        <div class="categories__wrapper">
            <div class="blog-header">
                <div class="blog-header__list">
                    <a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>"
                       class="<?= is_home() ? 'active-link' : ''; ?>">All categories</a>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category): ?>
                        <a href="<?= esc_url(get_category_link($category->term_id)); ?>"><?= esc_html($category->name); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="categories__title">
                <h1>All Categories</h1>
                <div class="categories__search">
                    <?php get_template_part('inc/templates/search-form'); ?>
                </div>
            </div>
            <?php
            foreach ($categories as $key => $category) {
                $posts = get_posts(array(
                    'category' => $category->term_id,
                    'numberposts' => 6,
                ));

                if ($posts) {
                    ?>
                    <div class="categories__content">
                        <h2>
                            <a href="<?= esc_url(get_category_link($category->term_id)) ?>"><?= esc_html($category->name) ?></a>
                        </h2>
                        <div class="swiper categories__category">
                            <div class="swiper-wrapper">
                                <?php
                                foreach ($posts as $post) {
                                    setup_postdata($post);
                                    ?>
                                    <div class="swiper-slide categories__category--post">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            ?>
                                            <div class="categories__category--post-image">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_post_thumbnail('thumbnail-image-sm'); ?>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                        ?>
                                        <div class="categories__category--post-title">
                                            <a href="<?= esc_url(get_permalink()); ?>">
                                                <h4><?php the_title(); ?></h4>
                                            </a>
                                        </div>
                                    </div>
                                    <?php
                                }

                                // If there are more than 6 posts, add a link to the category page
                                if (count($posts) >= 6) {
                                    ?>
                                    <div class="swiper-slide categories__category--link">
                                        <a href="<?= esc_url(get_category_link($category->term_id)) ?>">
                                            View all posts in <?= esc_html($category->name) ?>
                                        </a>
                                    </div>
                                    <?php
                                }
                                ?>

                            </div>
                        </div>
                        <div class="categories__buttons">
                            <img class="categories__buttons-prev-<?= $key ?>"
                                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                                 alt="Previous"
                            >
                            <img class="categories__buttons-next-<?= $key ?>"
                                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-next.svg"
                                 alt="Next"
                            >
                        </div>
                    </div>
                    <?php
                }

                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
<?php
get_template_part('inc/templates/trial');
get_footer();