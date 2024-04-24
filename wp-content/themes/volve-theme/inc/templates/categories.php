<div class="blog__content-block">
    <h2><?= esc_html($fields['title']); ?></h2>
    <div class="blog__categories">
        <?php
        $all_categories_image_url = wp_get_attachment_image_src($fields['all_categories_image'], 'full')[0];
        ?>
        <a href="<?= esc_url(get_permalink(get_option('page_for_posts'))); ?>">
            <div class="blog__categories--category">
                <?php if ($all_categories_image_url): // Check if the image URL is not empty ?>
                    <div class="blog__categories--category-image">
                        <img src="<?= esc_url($all_categories_image_url); ?>"
                             alt="All categories">
                    </div>
                <?php endif; ?>
                <span class="blog__categories--category-name">
                    All categories
                </span>
            </div>
        </a>
        <?php
        // Get categories
        $categories = get_categories(array(
            'number' => $fields['limit_of_categories'],
        ));
        foreach ($categories as $category) {
            $image_url = carbon_get_term_meta($category->term_id, 'crb_category_image');
            ?>
            <a href="<?= esc_url(get_category_link($category->term_id)); ?>">
                <div class="blog__categories--category">
                    <?php if ($image_url): // Check if the image URL is not empty ?>
                        <div class="blog__categories--category-image">
                            <img src="<?= esc_url($image_url); ?>"
                                 alt="<?= esc_attr($category->name); ?>">
                        </div>
                    <?php endif; ?>
                    <span class="blog__categories--category-name">
                        <?= esc_html($category->name); ?>
                    </span>
                </div>
            </a>
            <?php
        }
        ?>
    </div>
</div>