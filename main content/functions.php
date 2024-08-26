<?php
function Kimochi_setup() {
    add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );
        }
        add_action( 'after_setup_theme', 'Kimochi_setup' );

        function Kimochi_scripts() {
            wp_enqueue_style( 'main-style', get_stylesheet_uri() );
            }
            add_action( 'wp_enqueue_scripts', 'Kimochi_scripts' );

            function custom_theme_assets() {
    // Enqueue CSS
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/webdev/css/style.css');

    // Enqueue JS
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/webdev/asset/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'custom_theme_assets');
