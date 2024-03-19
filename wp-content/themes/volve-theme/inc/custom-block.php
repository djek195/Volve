<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

add_action('carbon_fields_register_fields', 'crb_attach_gutenberg_blocks');
function crb_attach_gutenberg_blocks()
{
    Block::make(__('Custom Images'))
        ->add_fields(
            [
                Field::make('image', 'image_desktop', __('Image Desktop'))
                    ->set_value_type('url'),
                Field::make('image', 'image_mobile', __('Image Mobile'))
                    ->set_value_type('url'),
                Field::make('text', 'image_alt', __('Alt Text')),
            ]
        )
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            ?>

            <div class="swiper swiper-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper__image">
                            <img src="https://source.unsplash.com/1920x1280/?animal" alt="Swiper">
                        </div>
                        <div class="swiper__text-content">
                            <h2>Slide 1</h2>
                            <p>Slide 1 description</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper__image">
                            <img src="https://source.unsplash.com/1920x1280/?nature" alt="Swiper">
                        </div>
                        <div class="swiper__text-content">
                            <h2>Slide 2</h2>
                            <p>Slide 2 description</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="swiper__image">
                            <img src="https://source.unsplash.com/1920x1280/?city" alt="Swiper">
                        </div>
                        <div class="swiper__text-content">
                            <h2>Slide 3</h2>
                            <p>Slide 3 description</p>
                        </div>
                    </div>
                </div>
                <div class="swiper__buttons">
                    <span class="swiper__buttons--prev">PREV</span>
                    <span class="swiper__buttons--next">NEXT</span>
                </div>
            </div>
            <?php
        }
        );
}