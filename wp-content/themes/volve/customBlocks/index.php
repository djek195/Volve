<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

function crb_attach_gutenberg_blocks()
{
    Block::make(__('My Shiny Gutenberg Block'))
        ->add_fields(array(
            Field::make('text', 'heading', __('Block Heading')),
            Field::make('image', 'image', __('Block Image')),
            Field::make('rich_text', 'content', __('Block Content')),
        ))
        ->set_render_callback(function ($fields, $attributes, $inner_blocks) {
            ?>

            <header class="header">
                <div class="header__content">
                    <div class="header__content--left">
                        <div class="header__content--left-logo">
                            <img src="<?php echo $fields['image']; ?>" alt="logo">
                        </div>
                        <?php
                        $pages = array(
                            'home' => 'Home',
                            'benefits' => 'Benefits',
                            'why-volve' => 'Why Volve',
                            'pricing' => 'Pricing',
                            'faq' => 'FAQ'
                        );
                        ?>

                        <nav class="header__content--left-nav">
                            <ul>
                                <?php foreach ($pages as $slug => $title) : ?>
                                    <li class="header__content--left-nav-item">
                                        <a href="/<?php echo $slug; ?>"
                                           class="header__content--left-nav-link <?php if (is_page($slug)) echo 'current-page'; ?>">
                                            <?php echo $title; ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </nav>
                    </div>
                    <div class="header__content--right">
                    </div>
            </header>

            <?php
        });
}