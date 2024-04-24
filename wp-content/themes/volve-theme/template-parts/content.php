<div class="archive__content--post">
    <?php
    if (has_post_thumbnail()) {
        ?>
        <div class="archive__content--post-image">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
        </div>
        <?php
    }
    ?>
    <div class="archive__content--post-title">
        <p>
            <a href="<?= esc_url(get_category_link(get_the_category(get_post()->ID)[0]->term_id)); ?>">
                <?= esc_html(get_the_category(get_post()->ID)[0]->name); ?>
            </a>
        </p>
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