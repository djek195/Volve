<?php
$files = scandir(NEW_BLOCKS_THEME_DIR . '/inc/blocks');

$blocks = [
    'CrossFunctionalTabs',
    'ExperienceSlider',
    'FooterImage',
    'Offers',
    'Pricing',
    'PrivilegesTabs',
    'RelatedArticlesSlider',
    'Start',
    'Trial',
];

foreach ($blocks as $block) {
    if (in_array($block . '.php', $files)) {
        include NEW_BLOCKS_THEME_DIR . '/inc/blocks/' . $block . '.php';
    }
}


function custom_block_render(string $block_id, array $fields, array $attributes = [], string $inner_blocks)
{
    $block_path = NEW_BLOCKS_THEME_DIR . '/inc/templates/';
    $block_path .= $block_id . '.php';
    if (file_exists($block_path)) {
        include $block_path;
    } else {
        if (WP_DEBUG) {
            echo '<p style="color: red;">Block template not found: ' . $block_path . '</p>';
        }
    }
}