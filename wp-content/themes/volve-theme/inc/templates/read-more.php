<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<div class="read-more__wrapper">
    <h2 class="read-more__title">Read more</h2>
    <div class="swiper read-more__slider">
        <div class="swiper-wrapper">
            <?php foreach ($fields['posts'] as $post): ?>
                <div class="read-more__slide swiper-slide">
                    <div class="read-more__slide--image">
                        <?php echo get_the_post_thumbnail($post->ID, 'thumbnail-image-sm') ?>
                    </div>
                    <div class="read-more__slide--text-content">
                        <h3 class="read-more__slide--text-content-title"><?= $post->post_title ?></h3>
                        <p class="read-more__slide--text-content-description"><?= $post->post_excerpt ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="read-more__slide--buttons">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>