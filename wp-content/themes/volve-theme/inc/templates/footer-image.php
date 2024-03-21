<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<div class="footer__image">
        <picture class="footer__image--wrapper">
            <source media="(min-width: 781px)" type="image/webp" srcset="<?= $fields['image_desktop'] ?>">
            <img src=" <?= $fields['image_mobile']; ?>" loading="lazy" decoding="async" alt="<?= $fields['image_alt'] ?>"
                 fetchpriority=" high">
        </picture>
</div>
