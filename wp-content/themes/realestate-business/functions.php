<?php
// Theme Setup Function
if (!function_exists('realestate_theme_setup')) {
    function realestate_theme_setup() {
        // General Theme Support
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('custom-logo');
        add_theme_support('menus');
        add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

        // Elementor Support (if Elementor is installed)
        if (did_action('elementor/loaded')) {
            add_theme_support('elementor');
        }
    }
}
add_action('after_setup_theme', 'realestate_theme_setup');

// Require additional theme setup files
$theme_inc_files = [
    '/inc/theme-setup.php',
    '/inc/custom-post-types.php',
    '/inc/customizer.php',
    '/inc/class-tgm-plugin-activation.php' // Added TGM Plugin Activation
];

foreach ($theme_inc_files as $file) {
    $file_path = get_template_directory() . $file;
    if (file_exists($file_path)) {
        require_once $file_path;
    } else {
        error_log("⚠️ Missing theme file: " . basename($file_path));
    }
}

// Register Required Plugins using TGM Plugin Activation
function realestate_register_required_plugins() {
    $plugins = [
        [
            'name'      => 'Elementor',
            'slug'      => 'elementor',
            'required'  => true,
        ],
        [
            'name'      => 'Elementor Pro',
            'slug'      => 'elementor-pro',
            'source'    => 'http://app.pridemasia.co.za/myplugins/elementor-pro-3_21_2.zip', // Source URL for Elementor Pro
            'required'  => true,
        ],
        [
            'name'      => 'Site Kit by Google',
            'slug'      => 'google-site-kit',
            'required'  => false,
        ],
        [
            'name'      => 'Solid Security Basic',
            'slug'      => 'ithemes-security',
            'required'  => false,
        ],
        [
            'name'      => 'Yoast SEO',
            'slug'      => 'wordpress-seo',
            'required'  => false,
        ],
    ];

    $config = [
        'id'           => 'realestate-business',
        'menu'         => 'tgmpa-install-plugins',
        'has_notices'  => true,
        'dismissable'  => true,
        'is_automatic' => false,
    ];

    tgmpa($plugins, $config);
}
add_action('tgmpa_register', 'realestate_register_required_plugins');
?>
