<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Pricing', 'practice'))
    ->add_fields(
        [
            Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
                ->add_fields( array(
                    Field::make( 'text', 'title', __( 'Slide Title' ) ),
                ) )
        ]
    )


    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('pricing', $fields, $attributes, $inner_blocks);
    });