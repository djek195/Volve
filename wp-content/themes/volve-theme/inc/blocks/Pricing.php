<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Pricing', 'practice'))
    ->add_fields(
        [
            Field::make('complex', 'crb_pricing', __('Pricing'))
                ->add_fields(array(
                    Field::make('text', 'pricing_title', __('Pricing Title')),
                    Field::make('text', 'pricing_price', __('Pricing Price')),
                    Field::make('text', 'pricing_period', __('Pricing Period')),
                    Field::make('text', 'pricing_button_text', __('Pricing Button Text')),
                    Field::make('text', 'pricing_button_link', __('Pricing Button Link')),
                    Field::make('text', 'billing', __('Billing')),
                    Field::make('text', 'designed_for', __('Designed for')),
                    Field::make('text', 'virtual_card', __('Virtual Card')),
                    Field::make('checkbox', 'physical_card', __('Physical Card')),
                    Field::make('checkbox', 'reporting', __('Automated expense management reporting')),
                    Field::make('checkbox', 'integration', __('Integration with all major accounting systems')),


                ))->set_layout('tabbed-horizontal')
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('pricing', $fields, $attributes, $inner_blocks);
    });