<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Sticky Posts'))
    ->set_description( __( 'This is a custom sticky posts block.' ) )
    ->add_fields(array(
        Field::make('association', 'sticky_posts', __('Sticky Posts'))
            ->set_types(array(
                array(
                    'type'      => 'post',
                    'post_type' => 'post',
                )
            ))
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('sticky-posts', $fields, $attributes, $inner_blocks);
    });