<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<div class="related">
    <div class="related__wrapper">
        <h2 class="related__title"><?= $fields['title'] ?></h2>
        <div class="swiper related__slider">
            <div class="swiper-wrapper">
                <?php foreach ($fields['posts'] as $post): ?>
                    <div class="related__slide swiper-slide">
                        <div class="related__slide--image">
                            <?= get_the_post_thumbnail($post->ID, 'thumbnail-image-md') ?>
                        </div>
                        <div class="related__slide--text-content">
                            <p class="related__slide--text-content-category">
                                <?= get_the_category($post->ID)[0]->cat_name ?></p>
                            <h3 class="related__slide--text-content-title"><?= $post->post_title ?></h3>
                            <p class="related__slide--text-content-description"><?= $post->post_excerpt ?></p>
                            <a class="related__slide--text-content-link" href="<?= get_permalink($post->ID) ?>">Read
                                more</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="related__slide--buttons">
            <img class="related__slide--buttons-prev"
                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                 alt="Previous"
            >
            <img class="related__slide--buttons-next"
                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-next.svg"
                 alt="Next"
            >
        </div>
    </div>
</div>