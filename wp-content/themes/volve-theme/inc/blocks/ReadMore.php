<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make(__('Read More Slider'))
    ->add_fields(
        [
            Field::make('text', 'title', __('Section Title')),
        ]
    )
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
        global $post;
        $category = get_the_category($post->ID)[0]->slug;

        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 4,
            'order' => 'DESC',
            'orderby' => 'date',
            'category_name' => $category,
            'post__not_in' => array($post->ID) // Exclude the current post
        );

        $query = new WP_Query($args);
        custom_block_render('read-more', array('title' => $fields['title'], 'posts' => $query->posts), $attributes, $inner_blocks);
    });