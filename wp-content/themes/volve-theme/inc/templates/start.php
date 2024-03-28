<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<section class="home__wrapper">
    <div class="home__main--content">
        <h1 class="home__main--content-title"><?= $fields["title"] ?></h1>
        <p class="home__main--content-description"><?= $fields["description"] ?></p>
        <div class="home__main--content-buttons">
            <button>Try free for 30 days</button>
            <a href="#l" class="home__main--content-button" data-fancybox>Learn more</a>
        </div>
    </div>
    <picture class="home__main--image">
        <source media="(min-width: 2000px)" type="image/webp" srcset="<?= $fields['image_desktop'] ?>">
        <img src=" <?= $fields['image_mobile']; ?>" loading="lazy" decoding="async" alt="<?= $fields['image_alt'] ?>"
             fetchpriority=" high">
    </picture>
</section>
