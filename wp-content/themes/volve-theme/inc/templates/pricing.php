<?php

?>

<section class="pricing">
    <div class="pricing__wrapper">
        <h1 class="pricing__title"><?= split_sentences(get_the_title()) ?></h1>
        <div class="pricing__content">
            <h2 class="pricing__subtitle">Select your plan that’s right for you</h2>
            <div class="pricing__banner">
                <div class="pricing__banner--price-wrapper">
                    <div class="banner__tabs">
                        Growth
                    </div>
                    <div class="pricing__banner--price-group">
                        <div class="pricing__banner--price-int">
                            <h4>Growth</h4>
                            <div class="pricing__banner--price">
                                <p>S$</p>
                                <p>8</p>
                            </div>
                            <p>per card/month</p>
                        </div>
                        <button>Try free for 30 days</button>
                    </div>
                </div>
                <div class="pricing__banner--benefits">
                    <ul class="pricing__banner--benefits-name">
                        <li>Billing</li>
                        <li>Designed for</li>
                        <li>Virtual cards</li>
                        <li>Physical card</li>
                        <li>Automated expense management reporting</li>
                        <li>Integration with all major accounting systems</li>
                    </ul>
                    <ul class="pricing__banner--benefits-result">
                        <li>Monthly</li>
                        <li>SMEs & Startups</li>
                        <li>Unlimted</li>
                        <li><img src="<?php echo get_template_directory_uri() . '/assets/icons/check_green.png'; ?>"
                                 alt="check"></li>
                        <li><img src="<?php echo get_template_directory_uri() . '/assets/icons/check_green.png'; ?>"
                                 alt="check"></li>
                        <li><img src="<?php echo get_template_directory_uri() . '/assets/icons/check_green.png'; ?>"
                                 alt="check"></li>
                    </ul>
                </div>
            </div>
            <h2 class="pricing__subtitle">Thinking of issuing more than 50 cards? Contact us for a custom pricing</h2>
        </div>
    </div>
</section>
