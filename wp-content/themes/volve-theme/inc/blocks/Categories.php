<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('Categories')
    ->add_fields(array(
        Field::make('text', 'title', 'Title')->set_default_value('Categories'),
        Field::make('text', 'limit_of_categories', 'Limit of Categories')->set_default_value('4'),
        Field::make('image', 'all_categories_image', 'All Categories Image'), // New image field
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('categories', $fields, $attributes, $inner_blocks);
    });