<?php

function mytheme_enqueue_assets()
{
    // Frontend Bootstrap CSS
    wp_enqueue_style(
        'bootstrap-css',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // Frontend Font Awesome CSS
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );

    // Frontend Custom CSS
    wp_enqueue_style(
        'mytheme-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('bootstrap-css', 'font-awesome'),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    // Frontend Bootstrap JS
    wp_enqueue_script(
        'bootstrap-js',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js',
        array(),
        '5.3.2',
        true
    );

    // Frontend Custom JS
    wp_enqueue_script(
        'mytheme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('bootstrap-js'),
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_assets');

function mytheme_enqueue_block_editor_assets()
{
    // Load Bootstrap in the editor
    wp_enqueue_style(
        'bootstrap-css-editor',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css',
        array(),
        '5.3.2'
    );

    // Load Font Awesome in the editor
    wp_enqueue_style(
        'font-awesome-editor',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
        array(),
        '6.5.0'
    );

    // Load theme styles in the editor
    wp_enqueue_style(
        'mytheme-editor-style',
        get_template_directory_uri() . '/assets/css/style.css',
        array('bootstrap-css-editor', 'font-awesome-editor'),
        filemtime(get_template_directory() . '/assets/css/style.css')
    );

    // Optional: Add editor-specific styles for better block editor layout
    wp_enqueue_style(
        'mytheme-custom-editor-style',
        get_template_directory_uri() . '/assets/css/editor-style.css',
        array(),
        filemtime(get_template_directory() . '/assets/css/editor-style.css')
    );
}
add_action('enqueue_block_editor_assets', 'mytheme_enqueue_block_editor_assets');
