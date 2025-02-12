<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="<?php bloginfo('charset'); ?>">

    <!-- Preconnect for faster DNS and connection establishment -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Oswald:wght@200..700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <nav class="jac-nav-container">
        <div class="jac-container">
            <div class="jac-logo-container">
                <?php 
                if (function_exists('the_custom_logo')) {
                    the_custom_logo();
                }
                ?>
            </div>
            <div class="jac-menu-container">
                <?php wp_nav_menu(array('theme_location' => 'desktop-menu')) ?>
            </div>
            <div class="jac-socials-container">
                <ul>
                    <li><a href="tel:555888777">555-888-777</a></li>
                    <li><a href="https://facebook.com"><?php get_template_part('template-parts/facebook') ?></a></li>
                    <li><a href="https://instagram.com"><?php get_template_part('template-parts/instagram') ?></a></li>
                </ul>
            </div>
        </div>
    </nav>
