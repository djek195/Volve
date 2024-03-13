<?php

function v_enqueue()
{
    wp_register_style(
        'v_font',
        get_theme_file_uri('font.css')
    );

    wp_register_style(
        'v_bootstrap_icons',
        get_theme_file_uri('assets/bootstrap-icons/bootstrap-icons.css')
    );

    wp_register_style(
        'v_theme',
        get_theme_file_uri('assets/public/index.css')
    );

    wp_enqueue_style('v_font');
    wp_enqueue_style('v_bootstrap_icons');
    wp_enqueue_style('v_theme');
}