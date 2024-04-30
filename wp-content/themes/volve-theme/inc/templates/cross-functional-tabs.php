<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */
?>
<div class="cross-functional">
    <div class="cross-functional__wrapper">
<!--        --><?php //= '<h1 class="cross-functional__title">' . implode('<br>', $title_sentences) . '</h1>'; ?>
        <h1 class="cross-functional__title"><?= split_sentences(get_the_title()) ?></h1>
        <div class="tab__dropdown">
            <div class="select">
                <span class="selected"><?= $fields['crb_slider'][0]['tab_title'] ?> </span>
                <div class="caret"></div>
            </div>
            <ul class="tab__dropdown--menu">
                <?php foreach ($fields['crb_slider'] as $key => $slide): ?>
                    <li class="<?= $key === 0 ? 'active' : '' ?>" data-tab="<?= $key ?>"><?= $slide['tab_title'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="cross-functional__content">
            <?php foreach ($fields['crb_slider'] as $key => $slide): ?>
                <div class="cross-functional__content--element tab__content <?= $key === 0 ? 'active' : '' ?>"
                     data-tab="<?= $key ?>">
                    <div class="cross-functional__content--image">
                        <?= wp_get_attachment_image($slide['tab_image'], 'full', false); ?>
                    </div>
                    <div class="cross-functional__content--text">
                        <?php
                        if (!empty($slide['tab_title'])) {
                            echo '<h2>' . $slide['tab_title'] . '</h2>';
                        }
                        ?>
                        <div class="cross-functional__content--text-container">
                            <?php foreach ($slide['crb_slider'] as $benefit): ?>
                                <div class="cross-functional__content--text-step">
                                    <h3><?= $benefit['benefit_subtitle'] ?></h3>
                                    <p> <?= split_sentences($benefit['benefit_description']) ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <button class="cross-functional__content--button">Try free for 30 days</button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>