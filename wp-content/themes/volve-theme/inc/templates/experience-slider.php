<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>


<section class="experience__wrapper">
    <div class="experience__title">
        <p>Get more done in less time</p>
        <h2>Experience Volve corporate 2-in-1 solution</h2>
    </div>
    <div class="swiper experience__swiper">
        <div class="swiper-wrapper">
            <?php foreach ($fields['crb_slider'] as $slide): ?>
                <div class="swiper-slide experience__swiper--slide">
                    <div class="experience__swiper--slide-image">
                        <?= wp_get_attachment_image($slide['image'], 'full', false); ?>
                    </div>
                    <div class="experience__swiper--slide-description">
                        <?= $slide['title']; ?>
                        <p><?= $slide['description']; ?></p>
                        <button>Explore Features</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="experience__swiper--buttons">
            <img class="experience__swiper--buttons-prev"
                 src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-prev.png"
                 alt="Previous"
            >
            <img class="experience__swiper--buttons-next"
                 src="<?php echo get_template_directory_uri(); ?>/assets/icons/arrow-next.svg" alt="Next"
            >
        </div>
</section>