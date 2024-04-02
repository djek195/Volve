<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Cross-Functional Tabs', 'practice'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Title')),
            Field::make( 'complex', 'crb_slider', __( 'Cross-Functional Tabs' ) )
                ->add_fields( array(
                    Field::make( 'text', 'tab_title', __( 'Slide Title' ) ),
                    Field::make( 'image', 'tab_image', __( 'Slide Image' ) ),
                    Field::make('complex', 'crb_slider', __('Benefits'))
                        ->add_fields( array(
                            Field::make( 'text', 'benefit_title', __( 'Benefit Title' ) ),
                            Field::make( 'text', 'benefit_description', __( 'Benefit Description' ) ),
                        ) ),
                    Field::make( 'text', 'url', __( 'Slide URL' ) )->set_attribute('type', 'url')
                ) )->set_layout('tabbed-horizontal')
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('cross-functional-tabs', $fields, $attributes, $inner_blocks);
    });