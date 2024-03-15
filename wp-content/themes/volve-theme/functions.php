<?php

function volve_theme_scripts() {
    // Register custom font
    wp_enqueue_style( 'volve-custom-font', get_template_directory_uri() . '/font.css', array(), '1.0.0', 'all');

    // Enqueue compiled CSS
    wp_enqueue_style( 'volve-compiled-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}

function my_cool_menu_function(){
    register_nav_menus( array(
        'primary' => 'Primary Navigation'
    ));
}

function enqueue_volve_theme_scripts() {
    wp_enqueue_script('volve-theme-script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0', true);
}

function enqueue_volve_theme_styles() {
    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'enqueue_volve_theme_styles' );


add_action('wp_enqueue_scripts', 'enqueue_volve_theme_scripts');

add_theme_support('menus');

add_action( 'after_setup_theme', 'my_cool_menu_function' );

add_action( 'wp_enqueue_scripts', 'volve_theme_scripts' );