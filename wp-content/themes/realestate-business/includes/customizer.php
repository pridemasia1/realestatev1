<?php
function realestate_customize_register($wp_customize) {
    // Add a section for site identity
    $wp_customize->add_section('realestate_theme_options', array(
        'title'    => __('Theme Options', 'realestate-business'),
        'priority' => 30,
    ));

    // Add setting for contact phone number
    $wp_customize->add_setting('realestate_phone_number', array(
        'default'   => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('realestate_phone_number', array(
        'label'    => __('Phone Number', 'realestate-business'),
        'section'  => 'realestate_theme_options',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'realestate_customize_register');
