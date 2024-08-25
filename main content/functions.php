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
            