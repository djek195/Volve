<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<div class="post-slider">
        <div class="swiper post-slider__slider">
            <div class="swiper-wrapper">
                <?php foreach ($fields['crb_slider'] as $image_id): ?>
                    <?php if (is_numeric($image_id)): ?>
                        <div class="post-slider__slide swiper-slide">
                            <div class="post-slider__slide--image">
                                <img src="<?= wp_get_attachment_url($image_id) ?>" alt="">
                            </div>
                            <?php if (!empty($image_metadata['image_meta']['caption'])): ?>
                                <div class="post-slider__slide--description">
                                    <p><?= $image_metadata['image_meta']['caption'] ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="post-slider__slide--buttons">
            <img class="post-slider__slide--buttons-prev"
                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                 alt="Previous"
            >
            <img class="post-slider__slide--buttons-next"
                 src="<?= get_template_directory_uri(); ?>/assets/icons/arrow-next.svg"
                 alt="Next"
            >
        </div>
</div>