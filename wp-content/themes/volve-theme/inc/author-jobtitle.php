<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

function attach_author_jobtitle_field()
{
    Container::make('user_meta', __('Job Title'))
        ->add_fields(array(
            Field::make('text', 'author_jobtitle', __('Job Title'))
        ));
}

add_action('carbon_fields_register_fields', 'attach_author_jobtitle_field');