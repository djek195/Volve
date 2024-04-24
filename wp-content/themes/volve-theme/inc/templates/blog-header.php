<div class="blog-header">
    <div class="blog-header__list">
        <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>">All categories</a>
        <?php
        $categories = get_categories();
        foreach ($categories as $category): ?>
            <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>"><?php echo esc_html($category->name); ?></a>
        <?php endforeach; ?>
    </div>
    <div class="search">
        <?php get_template_part('inc/templates/search-form'); ?>
    </div>
</div>