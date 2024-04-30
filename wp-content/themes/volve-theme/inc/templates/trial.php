<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */

$title = 'Enjoy a month of Volve on us! ';
$description = 'Sign up for a free trial and experience the difference for yourself.';
?>

<section class="trial">
    <div class="trial__wrapper">
        <div class="trial__content">
            <div class="trial__title">
                <h4><?= !empty($fields['title']) ? $fields['title'] : $title ?></h4>
                <p><?= !empty($fields['description']) ? $fields['description'] : $description ?></p>
            </div>
            <button>Try free for 30 days</button>
        </div>
    </div>
</section>
