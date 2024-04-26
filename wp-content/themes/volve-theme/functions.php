<?php

add_image_size('thumbnail-image', 330, 170, true);
add_image_size('thumbnail-image-sm', 330, 200, true);
add_image_size('thumbnail-image-md', 433, 250, true);
add_image_size('thumbnail-image-lg', 450, 273, true);
add_image_size('thumbnail-image-xl', 690, 410, true);
add_image_size('thumbnail-image-xxl', 1410, 490, true);


define('NEW_BLOCKS_THEME_DIR', get_template_directory());

function volve_theme_scripts()
{
    // Enqueue reset CSS
    wp_enqueue_style('volve-theme-reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all');

    // Register custom font
    wp_enqueue_style('volve-theme-custom-font', get_template_directory_uri() . '/font.css', array(), '1.0.0', 'all');

    // Enqueue swiper CSS
    wp_enqueue_style('volve-theme-swiper-css', get_template_directory_uri() . '/css/swiper.css', array(), '1.0.0', 'all');

    // Enqueue compiled CSS
    wp_enqueue_style('volve-theme-compiled-css', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
}

function my_cool_menu_function()
{
    register_nav_menus(array(
        'primary' => 'Primary Navigation'
    ));
}

function enqueue_volve_theme_scripts()
{
    // swiper js
    wp_enqueue_script('volve-theme-swiper-script', get_template_directory_uri() . '/js/swiper.js', array(), '1.0.0', true);

    // main ja file
    wp_enqueue_script('volve-theme-script', get_template_directory_uri() . '/js/script.js', array(), time(), true);

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

function crb_attach_theme_options()
{
    require_once __DIR__ . '/inc/carbon-blocks.php';
}

function split_sentences($text)
{
    $sentences = preg_split('/(?<=[.?!])\s+(?=[a-z])/i', $text);
    return implode('<br>', $sentences);
}

require_once __DIR__ . '/inc/category-image.php';
require_once __DIR__ . '/inc/author-jobtitle.php';

function load_more_posts()
{
    $paged = $_POST['page'] + 1;
    $args = array(
        'paged' => $paged,
        'post_status' => 'publish',
        'posts_per_page' => 6,
        'cat' => '',
        'category_name' => '',
        'order' => 'DESC',
    );
    $query = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-parts/content', get_post_format());
        }
    } else {
        error_log('No posts were found. Query: ' . print_r($query, true));
    }
    wp_die();
}

add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_load_more_posts', 'load_more_posts');

add_action('carbon_fields_register_fields', 'crb_attach_theme_options');

add_filter('nav_menu_css_class', 'add_additional_class_on_li', 10, 2);

add_action('wp_enqueue_scripts', 'enqueue_volve_theme_scripts');

add_theme_support('menus');

add_theme_support('post-thumbnails');

add_theme_support('title-tag');

add_action('after_setup_theme', 'my_cool_menu_function');

add_action('wp_enqueue_scripts', 'volve_theme_scripts');
