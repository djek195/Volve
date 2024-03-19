<?php

function volve_theme_scripts() {
    // Enqueue reset CSS
    wp_enqueue_style( 'volve-theme-reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');

    // Register custom font
    wp_enqueue_style( 'volve-theme-custom-font', get_template_directory_uri() . '/font.css', array(), '1.0.0', 'all');

    // Enqueue compiled CSS
    wp_enqueue_style( 'volve-theme-compiled-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

    // Enqueue swiper CSS
    wp_enqueue_style( 'volve-theme-swiper-css', get_template_directory_uri() . '/css/swiper.css', array(), '1.0.0', 'all');
}

function my_cool_menu_function(){
    register_nav_menus( array(
        'primary' => 'Primary Navigation'
    ));
}

function enqueue_volve_theme_scripts() {
    // swiper js
    wp_enqueue_script('volve-theme-swiper-script', get_template_directory_uri() . '/js/swiper.js', array(), '1.0.0', true);

    // main ja file
    wp_enqueue_script('volve-theme-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);

}

function add_additional_class_on_li($classes, $item)
{
    error_log('nav_menu_css_class filter triggered');
    $classes[] = 'header__nav--list-item';
    error_log(print_r($classes, true));
    if ($item->current == 1) {
        $classes[] = 'active';
    }

    return $classes;
}

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 2);

add_action('wp_enqueue_scripts', 'enqueue_volve_theme_scripts');

add_theme_support('menus');

add_action( 'after_setup_theme', 'my_cool_menu_function' );

add_action( 'wp_enqueue_scripts', 'volve_theme_scripts' );

require get_template_directory() . '/inc/custom-block.php';