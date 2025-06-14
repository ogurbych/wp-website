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
        <span class="logo dashicons dashicons-pets" aria-hidden="true"></span>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Your Shelter</a></h1>
    </div>
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="dashicons dashicons-menu"></span>
        <span class="screen-reader-text">Menu</span>
    </button>
    <nav>
        <ul id="primary-menu" class="primary-menu">
            <li><a href="#offerings"><span class="dashicons dashicons-info"></span><span class="label">About Us</span></a></li>
            <li><a href="<?php echo esc_url( home_url( '/blog-catalog' ) ); ?>"><span class="dashicons dashicons-admin-post"></span><span class="label">Blog Catalog</span></a></li>
            <li><a href="#contact"><span class="dashicons dashicons-email"></span><span class="label">Contact Us</span></a></li>
        </ul>
    </nav>
</header>
