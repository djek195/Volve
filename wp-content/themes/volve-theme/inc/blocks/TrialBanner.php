<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Trial Banner', 'practice'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Title')),
            Field::make('image', 'image_mobile', __('Banner Image Mobile'))->set_value_type('url'),
            Field::make('image', 'image_desktop', __('Banner Image Desktop'))->set_value_type('url'),
            Field::make('text', 'image_alt', __('Image Alt')),
            Field::make('text', 'banner_title', __('Banner Title')),
            Field::make('complex', 'banner_list', __('Benefits'))
                ->add_fields(array(
                    Field::make('text', 'banner_description', __('Banner Description')),
                )),
            Field::make('text', 'url', __('Slide URL'))->set_attribute('type', 'url')

        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('trial-banner', $fields, $attributes, $inner_blocks);
    });