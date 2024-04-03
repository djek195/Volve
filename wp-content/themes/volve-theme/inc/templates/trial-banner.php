<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<section class="trial-banner">
    <div class="trial-banner__wrapper">
        <h2 class="trial-banner__title">Volve changes the way work gets done</h2>
        <div class="trial-banner__main">
            <h3 class="trial-banner__main--title">Test-drive Volve for free for 30 days a must if your company has
                ticked 2
                or more of the following:</h3>
            <picture class="trial-banner__main--image">
                <source media="(min-width: 781px)" type="image/webp" srcset="<?= $fields['image_desktop'] ?>">
                <img src=" <?= $fields['image_mobile']; ?>" loading="lazy" decoding="async"
                     alt="<?= $fields['image_alt'] ?>"
                     fetchpriority=" high">
            </picture>
            <ul class="trial-banner__main--list">
                <li>We are looking to simplify your accounting process</li>
                <li>We incur online payments made via credit card, e.g. software subscriptions, recurring bills, online
                    purchases
                </li>
                <li>We have more than 5 employees incurring expenses out of the office or while travelling</li>
                <li>We are a(n) engineering / construction / consulting, logistics, shipping company</li>
                <li>Each employee has an average of 40 claims a month</li>
                <li>We outsourced the accounting function</li>
            </ul>
            <button class="trial-banner__main--button">Try free for 30 days
            </button>
        </div>
        <picture class="trial-banner__main--image">
            <source media="(min-width: 781px)" type="image/webp" srcset="<?= $fields['image_desktop'] ?>">
            <img src=" <?= $fields['image_mobile']; ?>" loading="lazy" decoding="async" alt="<?= $fields['image_alt'] ?>"
                 fetchpriority=" high">
        </picture>
    </div>
</section>