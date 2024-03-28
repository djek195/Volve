<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Start'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Title')),
            Field::make('text', 'description', __('Description')),
            Field::make('image', 'image_desktop', __('Image Desktop'))
                ->set_value_type('url'),
            Field::make('image', 'image_mobile', __('Image Mobile'))
                ->set_value_type('url'),
            Field::make('text', 'image_alt', __('Alt Text')),
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('start', $fields, $attributes, $inner_blocks);
    });