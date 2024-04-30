<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>

<section class="faq">
    <div class="faq__wrapper">
        <h1 class="faq__title"><?= split_sentences(get_the_title()) ?></h1>
        <div class="tab__dropdown">
            <div class="select">
                <span class="selected"><?= $fields['crb_slider'][0]['tab_title'] ?> </span>
                <div class="caret"></div>
            </div>
            <ul class="tab__dropdown--menu">
                <?php foreach ($fields['crb_slider'] as $key => $faq): ?>
                    <li class="<?= $key === 0 ? 'active' : '' ?>" data-tab="<?= $key ?>"><?= $faq['tab_title'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="faq__content">
            <?php foreach ($fields['crb_slider'] as $key => $faq): ?>
                <div class="faq__content--element tab__content <?= $key === 0 ? 'active' : '' ?>"
                     data-tab="<?= $key ?>">
                    <?php foreach ($faq['crb_slider'] as $key => $field): ?>
                        <div class="faq__content--text  <?= $key === 1 ? 'open' : '' ?>">
                            <h5><?= $field['question'] ?></h5>
                            <p><?= $field['answer'] ?></p>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
</section>

