<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<div class="related__wrapper">
    <h2 class="related__title"><?= $fields['title'] ?></h2>
    <div class="swiper related__slider">
        <div class="swiper-wrapper">
            <?php foreach ($fields['crb_slider'] as $slide): ?>
                <div class="related__slide swiper-slide">
                    <div class="related__slide--image">
                        <?php echo wp_get_attachment_image($slide['image'], 'full') ?>
                    </div>
                    <div class="related__slide--text-content">
                        <p class="related__slide--text-content-category">
                            <?= $slide['category'] ?></p>
                        <h3 class="related__slide--text-content-title"><?= $slide['title'] ?></h3>
                        <p class="related__slide--text-content-description"><?= $slide['description'] ?></p>
                        <a href="<?= $slide['url'] ?>">Read more</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="related__slide--buttons">
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>