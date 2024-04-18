<div class="blog__content-block">
    <h2><?php echo esc_html($fields['title']); ?></h2>
    <?php
    // Get latest posts
    $query = new WP_Query(array(
        'posts_per_page' => $fields['number_of_posts'],
        'ignore_sticky_posts' => true
    ));
    if ($query->have_posts()) {
        ?>
        <div class="blog__last-posts">
            <?php
            while ($query->have_posts()) : $query->the_post();
                ?>
                <div class="blog__last-posts--post">
                    <?php
                    if (has_post_thumbnail()) {
                        ?>
                        <div class="blog__last-posts--post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="blog__last-posts--post-title">
                        <p>
                            <a href="<?php echo esc_url(get_category_link(get_the_category(get_post()->ID)[0]->term_id)); ?>">
                                <?php echo esc_html(get_the_category(get_post()->ID)[0]->name); ?>
                            </a>
                        </p>
                        <h4><a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                        </h4>
                    </div>
                    <div class="blog__last-posts--post-description">
                        <p><?php echo get_the_excerpt(); ?></p>
                    </div>
                    <div class="author">
                        <div class="author__avatar">
                            <?php echo get_avatar(get_the_author_meta('ID')); ?>
                        </div>
                        <div class="author__name">
                            <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                                <?php echo esc_html(get_the_author()); ?>
                            </a>
                            <p class="author__bio">
                                <?php echo esc_html(get_the_author_meta('description')); ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
        <?php
    }
    wp_reset_postdata();
    ?>
</div>