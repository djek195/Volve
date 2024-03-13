<?php


// Includes
require_once(get_theme_file_path('/customBlocks/index.php'));
include(get_theme_file_path('/includes/front/enqueue.php'));
include(get_theme_file_path('/includes/front/head.php'));
include(get_theme_file_path('/includes/setup.php'));

// Hooks
add_action('carbon_fields_register_fields', 'crb_attach_gutenberg_blocks');
add_action('wp_enqueue_scripts', 'v_enqueue');
add_action('wp_head', 'v_head', 5);
add_action('after_setup_theme', 'v_setup_theme');