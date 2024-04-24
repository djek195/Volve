<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Offers'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Offers Title')),
            Field::make('complex', 'crb_slider', __('Offers List'))
                ->add_fields(array(
                    Field::make('image', 'offer_image', __('Tab Icon')),
                    Field::make('text', 'offer_title', __('Offer Title')),
                    Field::make('text', 'offer_description', __('Benefit Title')),
                ))->set_layout('tabbed-horizontal')
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('offers', $fields, $attributes, $inner_blocks);
    });