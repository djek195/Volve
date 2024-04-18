<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Trial'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Title')),
            Field::make('text', 'description', __('Description')),
            Field::make('text', 'url', __('Button url')),
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('trial', $fields, $attributes, $inner_blocks);
    });