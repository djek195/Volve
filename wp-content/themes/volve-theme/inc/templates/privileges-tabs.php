<?php

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
                    <li class="active" data-tab="0">Corporate Credit Card</li>
                    <li data-tab="1">Expense Report Software</li>
                </ul>
            </div>
            <div class="privileges__content--element tab__content active" data-tab="0">
                <div class="privileges__content--subtitles">
                    <h4>Features</h4>
                    <div class="privileges__content--subtitles-companies">
                        <h4>Volve</h4>
                        <h4>Others</h4>
                    </div>
                </div>
                <div class="privileges__content--comparison">
                    <p class="privileges__content--comparison-feature"><?= split_sentences('Showcase and embed your work with.
                        Publish across social channels in a click') ?></p>
                    <div class="privileges__content--comparison-icons">
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/icons/check_green.png'; ?>"
                                 alt="check">
                        </div>
                        <div>
                            <img src="<?= get_template_directory_uri() . '/assets/icons/cross_red.png'; ?>"
                                 alt="check">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>