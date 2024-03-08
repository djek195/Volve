<?php
/*
 * Plugin Name:       Volve Plus
 * Plugin URI:        https://example.com
 * Description:       A plugin for adding blocks to a theme.
 * Version:           1.0.0
 * Requires at least: 5.6
 * Requires PHP:      7.4
 * Author:            Yevhenii Kalinichenko
 * Author URI:        https://example.com/
 * Text Domain:       volve-plus
 * Domain Path:       /languages
 */


if(!function_exists('add_action')) {
    echo 'Seems like you stumbled here by accident';
    exit;
}

// Setup
define('UP_PLUGIN_DIR', plugin_dir_path(__FILE__));

// Includes
$rootFiles = glob(UP_PLUGIN_DIR . 'includes/*.php');
$subdirectoryFiles = glob(UP_PLUGIN_DIR . 'includes/**/*.php');
$allFiles = array_merge($rootFiles, $subdirectoryFiles);
foreach ($allFiles as $filename) {
    include_once ($filename);
}

// Hooks