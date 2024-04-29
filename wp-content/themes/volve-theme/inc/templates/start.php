<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<section class="home__section alignfull">
    <div class="home__wrapper">
        <div class="home__main">
            <div class="home__main--content">
                <h1 class="home__main--content-title"><?= split_sentences(get_the_title()) ?></h1>
                <p class="home__main--content-description"><?= $fields["description"] ?></p>
                <div class="home__main--content-buttons">
                    <button>Try free for 30 days</button>
                    <a href="#" class="home__main--content-button">Learn more</a>
                </div>
            </div>
            <div class="home__main--image">
                <div class="home__main--image-wrapper">
                    <?= wp_get_attachment_image($fields['image'], 'full', false); ?>
                </div>
            </div>
        </div>
    </div>
</section>