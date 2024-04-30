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
            <a class="header__logo--link" href="<?php echo esc_url(home_url('/')); ?>">
                <?php
                $svg_content = file_get_contents(get_template_directory_uri() . '/assets/images/volve-logo.svg');
                echo $svg_content;
                ?>
            </a>
        </div>

        <div class="header__desktop">
            <nav class="header__desktop--nav">
                <?php
                wp_nav_menu([
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                    'container' => false,
                    'menu_class' => 'header__desktop--nav-list',
                ]);
                ?>
            </nav>
            <div class="header__desktop--buttons">
                <div class="header__desktop--demo">
                    <button>Try free for 30 days</button>
                </div>
            </div>
        </div>
        <div class="header__burger">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/burger.svg" class="burger"
                 alt="Open Menu"/>
        </div>
        <div class="header__content">
            <div class="header__close">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/close.svg" class="close"
                     alt="Close Menu"/>
            </div>
            <nav class="header__content--inner">
                <div class="header__nav">
                    <div class="header__nav--panel">
                        <div class="header__nav--panel-main">
                            <?php
                            wp_nav_menu([
                                'menu' => 'mobile-menu',
                                'theme_location' => '',
                                'menu_id' => 'mobile-menu',
                                'container' => false,
                                'menu_class' => 'header__nav--panel-main_list',
                            ]);
                            ?>
                            <div class="header__buttons">
                                <div class="header__buttons--demo">
                                    <button>Try free for 30 days</button>
                                </div>
                            </div>
                        </div>
                        <div class="header__nav--panel-sub">
                            <div class="header__nav--panel-sub_back">
                                <img src="
                                    <?php echo get_template_directory_uri(); ?>/assets/icons/back.png" class="close"
                                     alt="Close Sub"/>
                                <span>Back</span>
                            </div>
                            <div class="header__nav--panel-sub_wrapper">
                                <?php
                                wp_nav_menu([
                                    'menu' => 'sub-menu',
                                    'theme_location' => '',
                                    'menu_id' => 'sub-menu',
                                    'container' => false,
                                    'menu_class' => 'header__nav--panel-sub_list',
                                ]);
                                ?>
                                <div class="header__search">
                                    <?php get_template_part('inc/templates/search-form'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>


