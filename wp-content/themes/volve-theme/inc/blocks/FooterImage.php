<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Footer Image'))
    ->add_fields(
        [
            Field::make('image', 'image_desktop', __('Image Desktop'))
                ->set_value_type('url'),
            Field::make('image', 'image_mobile', __('Image Mobile'))
                ->set_value_type('url'),
            Field::make('text', 'image_alt', __('Alt Text')),
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('footer-image', $fields, $attributes, $inner_blocks);
    });