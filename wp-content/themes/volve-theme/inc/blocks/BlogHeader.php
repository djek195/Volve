<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make('Blog Header')
    ->add_fields(array(
        Field::make('text', 'title', 'Title')->set_default_value('Blog Header'),
    ))
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        custom_block_render('blog-header', $fields, $attributes, $inner_blocks);
    });