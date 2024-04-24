<div class="blog__content-block">
    <h1 class="blog__title"><?php the_title() ?></h1>
    <?php
    if (!empty($fields['sticky_posts'])) {
        ?>
        <div class="swiper blog__sticky--posts">
            <div class="swiper-wrapper">
                <?php
                foreach ($fields['sticky_posts'] as $sticky_post) {
                    $post = get_post($sticky_post['id']);
                    $author_id = get_post_field('post_author', $post->ID);
                    $primary_category_id = yoast_get_primary_term_id('category', $post->ID);
                    $primary_category = get_term($primary_category_id);
                    $primary_category_name = $primary_category->name;
                    ?>
                    <div class="swiper-slide blog__sticky--posts-post">
                        <div class="blog__sticky--posts-post-image">
                            <?= get_the_post_thumbnail($post, 'thumbnail-image-xxl'); ?>
                        </div>
                        <div class="blog__sticky--posts-post-title">
                            <p>
                                <a href="<?= esc_url(get_category_link($primary_category_id)); ?>">
                                    <?= esc_html($primary_category_name); ?>
                                </a>
                            </p>
                            <h4><a href="<?= esc_url(get_permalink($post)); ?>"><?= get_the_title($post); ?></a>
                            </h4>
                        </div>
                        <div class="blog__sticky--posts-post-description">
                            <p><?= get_the_excerpt($post); ?></p>
                        </div>
                        <div class="author-block">
                            <div class="author-block__avatar">
                                <?= get_avatar($author_id); ?>
                            </div>
                            <div class="author-block__name">
                                <a href="<?= esc_url(get_author_posts_url($author_id)); ?>">
                                    <?= esc_html(get_the_author_meta('display_name', $author_id)); ?>
                                </a>
                                <p class="author-block__bio">
                                    <?= esc_html(carbon_get_user_meta(get_the_author_meta('ID'), 'author_jobtitle')); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php
                    wp_reset_postdata();
                }
                ?>
            </div>
        </div>
        <div class="blog__sticky--posts-buttons">
            <img class="blog__sticky--posts-buttons-prev"
                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                 alt="Previous"
            >
            <img class="blog__sticky--posts-buttons-next"
                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-next.svg"
                 alt="Next"
            >
        </div>
        <?php
    }
    ?>
</div>