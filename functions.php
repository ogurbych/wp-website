<?php
function starter_theme_setup() {
    add_theme_support( 'title-tag' );
    // Register navigation menu location
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'starter-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'starter_theme_setup' );

function starter_theme_scripts() {
    // Google Fonts
    wp_enqueue_style( 'starter-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap', array(), null );
    // Main stylesheet
    wp_enqueue_style( 'starter-style', get_stylesheet_uri() );

    // WordPress dashicons for front-end icons
    wp_enqueue_style( 'dashicons' );

    // Swiper slider assets
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css', array(), null );
    wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true );

    // Theme JavaScript
    wp_enqueue_script( 'starter-theme', get_template_directory_uri() . '/js/theme.js', array('swiper'), null, true );
}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );
