<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<section class="trial">
    <div class="trial__wrapper">
        <div class="trial__title">
            <h4><?= $fields['title'] ?></h4>
            <p><?= $fields['description'] ?></p>
        </div>
        <button>Try free for 30 days</button>
    </div>
</section>
