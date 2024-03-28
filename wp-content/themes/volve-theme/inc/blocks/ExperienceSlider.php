<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Experience Slider'))
    ->add_fields(
        [
            Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
                ->add_fields( array(
                    Field::make( 'image', 'image', __( 'Slide Image' ) ),
                    Field::make( 'text', 'title', __( 'Slide Title' ) ),
                    Field::make( 'text', 'description', __( 'Slide Description' ) ),
                    Field::make( 'text', 'url', __( 'Slide URL' ) )->set_attribute('type', 'url')
                ) )
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('experience-slider', $fields, $attributes, $inner_blocks);
    });