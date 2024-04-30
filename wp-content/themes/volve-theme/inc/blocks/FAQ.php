<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('FAQ', 'practice'))
    ->add_fields(
        [
            Field::make( 'complex', 'crb_slider', __( 'FAQ Tabs' ) )
                ->add_fields( array(
                    Field::make( 'text', 'tab_title', __( 'FAQ Tab' ) ),
                    Field::make('complex', 'crb_slider', __('Answer-Question'))
                        ->add_fields( array(
                            Field::make( 'text', 'question', __( 'Question' ) ),
                            Field::make( 'text', 'answer', __( 'Answer' ) ),
                        ) ),
                ) )->set_layout('tabbed-horizontal')
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('faq', $fields, $attributes, $inner_blocks);
    });