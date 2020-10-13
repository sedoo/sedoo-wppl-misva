<?php

function register_acf_block_types_misva() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'sedoo_blocks_misva',
        'title'             => __('Misva'),
        'description'       => __('Ajoute un viewer Misva'),
        'render_callback'   => 'sedoo_blocks_components_render_callback_misva',
        'category'          => 'widgets',
        'icon'              => 'admin-comments',
        'keywords'          => array( 'Misva', 'sedoo' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types_misva');
}