<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Related Articles Slider'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Section Title')),
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        $args = array(
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true,
        );

        $query = new WP_Query($args);

        custom_block_render('related-articles-slider', array('title' => $fields['title'], 'posts' => $query->posts), $attributes, $inner_blocks);
    });