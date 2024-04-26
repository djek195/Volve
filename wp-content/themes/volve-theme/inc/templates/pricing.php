<?php
/**
 * @var array $fields , an array with the entered data in the block.
 * @var array $attributes , an array with the attributes of the block like custom CSS class, alignment, etc.
 * @var string $inner_blocks , a string with the content of all nested blocks.
 */

$selectedTab = esc_html($fields['crb_pricing'][0]['pricing_title']);

?>

<section class="pricing">
    <div class="pricing__wrapper">
        <h1 class="pricing__title"><?= split_sentences(get_the_title()) ?></h1>
                            <div class="pricing__content">
                                <h2 class="pricing__subtitle">Select your plan that’s right for you</h2>
                                <div class="pricing__banner">
                                    <div class="pricing__banner--tabs">
                                        <div class="pricing__tabs">
                                            <div class="pricing__tabs--select">
                                                <span class="pricing__tabs--selected"><?= $selectedTab ?></span>
                                                <div class="pricing__tabs--caret"></div>
                                            </div>
                                            <ul class="pricing__tabs--menu">
                                                <?php foreach ($fields['crb_pricing'] as $key => $tab): ?>
                                <li class="<?= $key === 0 ? 'active' : '' ?>"
                                    data-tab="<?= esc_attr($key); ?>"><?= esc_html($tab['pricing_title']); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <div class="pricing__banner--plans">
                    <div class="pricing__banner--plans-title">
                        <h3>Features</h3>
                    </div>
                    <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                        <div class="pricing__banner--plans-price <?= $key === 0 ? 'pricing__banner--plans-price_active' : '' ?>"
                             data-tab="<?= esc_attr($key); ?>">
                            <h4><?= esc_html($pricing['pricing_title']); ?></h4>
                            <div class="coin">
                                S$
                                <span><?= esc_html($pricing['pricing_price']); ?></span>
                            </div>
                            <p><?= esc_html($pricing['pricing_period']); ?></p>
                            <a href="<?= esc_url($pricing['pricing_button_link']); ?>"
                               class="btn btn--primary"><?= esc_html($pricing['pricing_button_text']); ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <ul class="pricing__banner--benefits">
                    <li class="pricing__banner--benefits-item">
                        <div class="pricing__banner--benefits-item_title">
                            Billing
                        </div>
                        <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                            <div class="pricing__banner--benefits-item_result <?= $key === 0 ? 'active' : '' ?>"
                                 data-tab="<?= esc_attr($key); ?>">
                                <p><?= esc_html($pricing['billing']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </li>
                    <li class="pricing__banner--benefits-item">
                        <div class="pricing__banner--benefits-item_title">
                            Designed for
                        </div>

                        <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                            <div class="pricing__banner--benefits-item_result <?= $key === 0 ? 'active' : '' ?>"
                                 data-tab="<?= esc_attr($key); ?>">
                                <p><?= esc_html($pricing['designed_for']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </li>
                    <li class="pricing__banner--benefits-item">
                        <div class="pricing__banner--benefits-item_title">
                            Virtual cards
                        </div>

                        <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                            <div class="pricing__banner--benefits-item_result <?= $key === 0 ? 'active' : '' ?>"
                                 data-tab="<?= esc_attr($key); ?>">
                                <p><?= esc_html($pricing['virtual_card']); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </li>
                    <li class="pricing__banner--benefits-item">
                        <div class="pricing__banner--benefits-item_title">
                            Physical card
                        </div>

                        <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                            <div class="pricing__banner--benefits-item_result <?= $key === 0 ? 'active' : '' ?>"
                                 data-tab="<?= esc_attr($key); ?>">
                                <img src="<?= get_template_directory_uri() . '/assets/icons/' . ($pricing['physical_card'] ? 'check_green.png' : 'cross_red.png'); ?>"
                                     alt="check">
                            </div>
                        <?php endforeach; ?>
                    </li>
                    <li class="pricing__banner--benefits-item">
                        <div class="pricing__banner--benefits-item_title <?= $key === 0 ? 'active' : '' ?>"
                             data-tab="<?= esc_attr($key); ?>">
                            Automated expense management reporting
                        </div>

                        <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                            <div class="pricing__banner--benefits-item_result <?= $key === 0 ? 'active' : '' ?>"
                                 data-tab="<?= esc_attr($key); ?>">
                                <img src="<?= get_template_directory_uri() . '/assets/icons/' . ($pricing['reporting'] ? 'check_green.png' : 'cross_red.png'); ?>"
                                     alt="check">
                            </div>
                        <?php endforeach; ?>
                    </li>
                    <li class="pricing__banner--benefits-item">
                        <div class="pricing__banner--benefits-item_title">
                            Integration with all major accounting systems
                        </div>

                        <?php foreach ($fields['crb_pricing'] as $key => $pricing): ?>
                            <div class="pricing__banner--benefits-item_result <?= $key === 0 ? 'active' : '' ?>"
                                 data-tab="<?= esc_attr($key); ?>">
                                <img src="<?= get_template_directory_uri() . '/assets/icons/' . ($pricing['integration'] ? 'check_green.png' : 'cross_red.png'); ?>"
                                     alt="check">
                            </div>
                        <?php endforeach; ?>
                    </li>
                </ul>
            </div>
            <h2 class="pricing__subtitle">Thinking of issuing more than 50 cards? Contact us for <a href="#">a custom pricing</a></h2>
        </div>
    </div>
</section>
