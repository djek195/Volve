<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<section class="offers">
    <div class="offers__wrapper">
        <h2 class="offers__title"><?= $fields['title'] ?></h2>
        <div class="offers__content">
            <?php foreach ($fields['crb_slider'] as $slide): ?>
                <div class="offers__content--element">
                    <div class="offers__content--image">
                        <?= wp_get_attachment_image($slide['offer_image'], 'full', false); ?>
                    </div>
                    <div class="offers__content--text">
                        <h3><?= $slide['offer_title'] ?></h3>
                        <p><?= $slide['offer_description'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="show-more">
            <button>
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</section>
