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
        <div class="category-name__list">
            <?php
            $post_categories = get_the_category(get_post()->ID);
            $categories_links = array();

            foreach ($post_categories as $category) {
                $categories_links[] = '<a class="category-name" href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
            }

            echo implode(', ', $categories_links);
            ?>
        </div>
        <h4><a href="<?= esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
        </h4>
    </div>
    <div class="archive__content--post-description">
        <p><?= get_the_excerpt(); ?></p>
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