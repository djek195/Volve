<?php

/**
 * The template for displaying the footer
 */
?>

<footer class="footer">
    <div class="footer__wrapper">
        <div class="footer__info">
            <div class="footer__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/volve-logo.svg" class="logo"
                         alt="Volve Logo"/>
                </a>
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
                <ul class="footer__categories--content">
                    <li class=""><a href="<?php echo esc_url(home_url('/benefits')); ?>">Benefits</a>
                    </li>
                    <li class=""><a href="<?php echo esc_url(home_url('/why')); ?>">Why Volve</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('/Pricing')); ?>">Pricing</a>
                    </li>
                    <li class=""><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                </ul>
            </div>
            <div class="footer__navigation--item nav">
                <h4>Resources</h4>
                <ul class="footer__categories--content">
                    <li class=""><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Help Center</a>
                    </li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Partners</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Customers</a>
                    </li>
                </ul>
            </div>
            <div class="footer__navigation--item nav">
                <h4>Company</h4>
                <ul class="footer__categories--content">
                    <li class=""><a href="<?php echo esc_url(home_url('/blog')); ?>">About Us</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Careers</a>
                    </li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Press</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Legal</a>
                    </li>
                </ul>
            </div>
            <div class="footer__navigation--item nav">
                <h4>Legal</h4>
                <ul class="footer__categories--content">
                    <li class=""><a href="<?php echo esc_url(home_url('/blog')); ?>">Terms of Service</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Terms & Conditions</a>
                    </li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Privacy Policy</a></li>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">FraudAwareness</a>
                    <li class=""><a href="<?php echo esc_url(home_url('#')); ?>">Complaints Process</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__license">
    <div class="footer__license--content">
        <p>© Copyright 2020 Volve Solutions Pte Ltd</p>
        <p>The Card is issued by Wirecard Card Solutions Ltd (“WDCS”) pursuant to license from Visa. WDCS is authorised
            by the Financial Conduct Authority to conduct electronic money service activities under the Electronic Money
            Regulations 2011 (Ref: 900051).</p>
    </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
