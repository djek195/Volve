<?php

/**
 * The template for displaying the footer
 */
?>

<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__info">
            <div class="footer__logo">
                <?php
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="footer__info--address">
                <p>Volve Solutions Pte Ltd</p>
                <p> 6 Raffles Quay, #11-07</p>
                <p>Singapore 048580</p>
            </div>
            <div class="footer__info--contact">
                <h4>Contact</h4>
                <a href="mailto:info@example.com">info@volve.cc</a>
            </div>
        </div>
        <div class="footer__navigation">
            <div class="footer__navigation--item nav open">
                <h4>Product</h4>
                <?php
                wp_nav_menu([
                    'menu' => 'Product',
                    'theme_location' => '',
                    'menu_id' => 'product',
                    'container' => false,
                    'menu_class' => 'footer__categories--content',
                ]);
                ?>
            </div>
            <div class="footer__navigation--item nav">
                <h4>Resources</h4>
                <?php
                wp_nav_menu([
                    'menu' => 'Ressources',
                    'theme_location' => '',
                    'menu_id' => 'ressources',
                    'container' => false,
                    'menu_class' => 'footer__categories--content',
                ]);
                ?>
            </div>
            <div class="footer__navigation--item nav">
                <h4>Company</h4>
                <?php
                wp_nav_menu([
                    'menu' => 'Company',
                    'theme_location' => '',
                    'menu_id' => 'company',
                    'container' => false,
                    'menu_class' => 'footer__categories--content',
                ]);
                ?>
            </div>
            <div class="footer__navigation--item nav">
                <h4>Legal</h4>
                <?php
                wp_nav_menu([
                    'menu' => 'Legal',
                    'theme_location' => '',
                    'menu_id' => 'legal',
                    'container' => false,
                    'menu_class' => 'footer__categories--content',
                ]);
                ?>
            </div>
        </div>
    </div>
    <div class="footer__license">
        <div class="footer__license--content">
            <p>© Copyright 2020 Volve Solutions Pte Ltd</p>
            <p>The Card is issued by Wirecard Card Solutions Ltd (“WDCS”) pursuant to license from Visa. WDCS is
                authorised
                by the Financial Conduct Authority to conduct electronic money service activities under the Electronic
                Money
                Regulations 2011 (Ref: 900051).</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
