<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<header class="header">
    <div class="header__wrapper">
        <div class="header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/volve-logo.svg" class="logo"
                     alt="Volve Logo"/>
            </a>
        </div>
        <div class="header__burger">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/burger.svg" class="burger"
                     alt="Open Menu"/>
            </a>
        </div>
        <div class="header__content">
            <div class="header__close">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/close.svg" class="close"
                     alt="Close Menu"/>
            </div>
            <nav class="header__nav">
                <ul class="header__nav--list">
                    <li class="header__nav--list-item active"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="header__nav--list-item"><a href="<?php echo esc_url(home_url('/benefits')); ?>">Benefits</a>
                    </li>
                    <li class="header__nav--list-item"><a href="<?php echo esc_url(home_url('/why')); ?>">Why Volve</a></li>
                    <li class="header__nav--list-item"><a href="<?php echo esc_url(home_url('/Pricing')); ?>">Pricing</a>
                    </li>
                    <li class="header__nav--list-item"><a href="<?php echo esc_url(home_url('/faq')); ?>">FAQ</a></li>
                    <li class="header__nav--list-item"><a href="<?php echo esc_url(home_url('/blog')); ?>">Blog</a></li>
                </ul>
            </nav>
            <div class="header__buttons">
                <div class="header__buttons--auth">
                    <a>Log in</a>
                </div>
                <div class="header__buttons--demo">
                    <button>Try free for 30 days</button>
                </div>
            </div>
        </div>
    </div>
</header>


