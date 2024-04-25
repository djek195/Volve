<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */

$selectedTab = esc_html($fields['crb_tab'][0]['tab_title']);

?>

<section class="privileges">
    <div class="privileges__wrapper">
        <h2 class="privileges__title"><?= esc_html($fields['title']); ?></h2>
        <div class="privileges__content">
            <div class="privileges__tabs">
                <div class="privileges__tabs--select">
                    <span class="privileges__tabs--selected">Corporate Credit Card</span>
                    <div class="privileges__tabs--caret"></div>
                </div>
                <ul class="privileges__tabs--menu">
                    <?php foreach ($fields['crb_tab'] as $key => $tab): ?>
                        <li class="<?= $key === 0 ? 'active' : '' ?>"
                            data-tab="<?= esc_attr($key); ?>"><?= esc_html($tab['tab_title']); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="privileges__content--element tab__content active" data-tab="0">
                <div class="privileges__content--subtitles">
                    <div class="privileges__content--subtitles-item">
                        <h3 class="privileges__content--subtitles-title">Features</h3>
                    </div>
                    <div class="privileges__content--subtitles-item">
                        <h3 class="privileges__content--subtitles-title">Volve</h3>
                    </div>
                    <div class="privileges__content--subtitles-item">
                        <h3 class="privileges__content--subtitles-item_desktop">
                            <?= esc_html($selectedTab); ?>
                        </h3>
                        <h3 class="privileges__content--subtitles-item_mobile">
                            Other
                        </h3>
                    </div>
                </div>
                <?php foreach ($fields['crb_tab'] as $key => $content): ?>
                    <ul class="privileges__content--list <?= $key === 0 ? 'active' : '' ?>"
                        data-tab="<?= esc_attr($key); ?>"
                        style="<?= $key ? 'display: none;' : '' ?>">
                        <?php foreach ($content['tab_content'] as $comparison): ?>
                            <li class="privileges__content--list-item">
                                <p><?= split_sentences(esc_html($comparison['comparison_subtitle'])); ?></p>
                                <div>
                                    <img src="<?= $comparison['comparison_volve'] ? get_template_directory_uri() . '/assets/icons/check_green.png' : get_template_directory_uri() . '/assets/icons/cross_red.png'; ?>"
                                         alt="check">
                                </div>
                                <div>
                                    <img src="<?= $comparison['comparison_others'] ? get_template_directory_uri() . '/assets/icons/check_green.png' : get_template_directory_uri() . '/assets/icons/cross_red.png'; ?>"
                                         alt="check">
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>