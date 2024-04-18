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
                    $author_id = get_post_field ('post_author', $post->ID);
                    $primary_category_id = yoast_get_primary_term_id('category', $post->ID);
                    $primary_category = get_term($primary_category_id);
                    $primary_category_name = $primary_category->name;
                    ?>
                    <div class="swiper-slide blog__sticky--posts-post">
                        <div class="blog__sticky--posts-post-image">
                            <?php echo get_the_post_thumbnail($post); ?>
                        </div>
                        <div class="blog__sticky--posts-post-title">
                            <p>
                                <a href="<?php echo esc_url(get_category_link($primary_category_id)); ?>">
                                    <?php echo esc_html($primary_category_name); ?>
                                </a>
                            </p>
                            <h4><a href="<?php echo esc_url(get_permalink($post)); ?>"><?php echo get_the_title($post); ?></a>
                            </h4>
                        </div>
                        <div class="blog__sticky--posts-post-description">
                            <p><?php echo get_the_excerpt($post); ?></p>
                        </div>
                        <div class="author">
                            <div class="author__avatar">
                                <?php echo get_avatar($author_id); ?>
                            </div>
                            <div class="author__name">
                                <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>">
                                    <?php echo esc_html(get_the_author_meta('display_name', $author_id)); ?>
                                </a>
                                <p class="author__bio">
                                    <?php echo esc_html(get_the_author_meta('description', $author_id)); ?>
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
                 src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                 alt="Previous"
            >
            <img class="blog__sticky--posts-buttons-next"
                 src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-next.svg"
                 alt="Next"
            >
        </div>
        <?php
    }
    ?>
</div>