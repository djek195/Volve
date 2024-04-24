<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Privileges Tabs', 'practice'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Title')),
            Field::make('complex', 'crb_tab', __('Privileges Tabs'))
                ->add_fields(array(
                    Field::make('text', 'tab_title', __('Tab Title')),
                    Field::make('complex', 'tab_content', __('Comparison'))
                        ->add_fields(array(
                            Field::make('text', 'comparison_subtitle', __('Comparison Title')),
                            Field::make('checkbox', 'comparison_volve', __('Comparison Volve')),
                            Field::make('checkbox', 'comparison_others', __('Comparison Others')),
                        )),
                ))->set_layout('tabbed-horizontal')
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('privileges-tabs', $fields, $attributes, $inner_blocks);
    });