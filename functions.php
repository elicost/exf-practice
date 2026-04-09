<?php

function exf_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'exf-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'exf_theme_setup' );

function exf_enqueue_assets() {
    wp_enqueue_style(
        'exf-style',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0.0'
    );
}
add_action( 'wp_enqueue_scripts', 'exf_enqueue_assets' );
