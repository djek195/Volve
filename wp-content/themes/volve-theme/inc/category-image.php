<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function attach_category_image_field()
{
    Container::make('term_meta', __('Category Image'))
        ->where('term_taxonomy', '=', 'category')
        ->add_fields(array(
            Field::make('image', 'crb_category_image', __('Category Image'))
                ->set_value_type('url')
        ));
}

add_action('carbon_fields_register_fields', 'attach_category_image_field');