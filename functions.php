<?php
function starter_theme_setup() {
    // Enable dynamic title tag support.
    add_theme_support( 'title-tag' );

    // Register a primary navigation menu.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'starter-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'starter_theme_setup' );

function starter_theme_scripts() {
    wp_enqueue_style( 'starter-theme-style', get_stylesheet_uri() );

    // Only load Swiper on the front page template.
    if ( is_page_template( 'templates/front-page.php' ) ) {
        wp_enqueue_style( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.css', array(), '8' );
        wp_enqueue_script( 'swiper', 'https://unpkg.com/swiper@8/swiper-bundle.min.js', array(), '8', true );
        wp_enqueue_script( 'starter-front-page', get_template_directory_uri() . '/js/front-page.js', array( 'swiper' ), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );

