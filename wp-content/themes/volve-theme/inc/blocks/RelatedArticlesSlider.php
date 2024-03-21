<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Related Articles Slider'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Section Title')),
            Field::make( 'complex', 'crb_slider', __( 'Slider' ) )
                ->add_fields( array(
                    Field::make( 'image', 'image', __( 'Slide Image' ) ),
                    Field::make( 'text', 'category', __( 'Blog Category' ) ),
                    Field::make( 'text', 'title', __( 'Slide Title' ) ),
                    Field::make( 'text', 'description', __( 'Post Description' ) ),
                    Field::make( 'text', 'url', __( 'Post Link' ) ),
                ) )
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('related-articles-slider', $fields, $attributes, $inner_blocks);
    });