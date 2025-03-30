<?php
function realestate_theme_setup() {
    // Add support for featured images
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'realestate-business'),
        'footer'  => __('Footer Menu', 'realestate-business'),
    ));

    // Add support for HTML5 elements
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
}
add_action('after_setup_theme', 'realestate_theme_setup');
