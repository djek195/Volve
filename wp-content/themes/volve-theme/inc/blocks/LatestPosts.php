<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('Latest Posts')
    ->add_fields(array(
        Field::make('text', 'title', 'Title')->set_default_value('Latest'),
        Field::make('text', 'number_of_posts', 'Number of Posts')->set_default_value('5'),
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('latest-posts', $fields, $attributes, $inner_blocks);
    });