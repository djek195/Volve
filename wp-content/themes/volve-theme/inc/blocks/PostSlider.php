<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Post Slider', 'practice'))
    ->add_fields(
        [
            Field::make('media_gallery', 'crb_slider', __('Images'))
                ->set_type('image')
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('post-slider', $fields, $attributes, $inner_blocks);
    });