<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">
    <div class="site-branding">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
    </div>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="dashicons dashicons-menu"></span>
        <span class="screen-reader-text">Menu</span>
    </button>
    <nav>
        <ul id="primary-menu" class="primary-menu">
            <li><a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About Us</a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog' ) ); ?>">Blog</a></li>
            <li><a href="<?php echo esc_url( home_url( '/contact-us' ) ); ?>">Contact Us</a></li>
        </ul>
    </nav>
</header>
