<?php
function jac_enqueue_scripts()
{
    // CSS
    // Global CSS
    wp_enqueue_style('jac-global-css', get_template_directory_uri() . '/assets/css/global.css', array(), filemtime(get_template_directory() . '/assets/css/global.css'));

    // Header CSS
    wp_enqueue_style('jac-header-css', get_template_directory_uri() . '/assets/css/header.css', array(), filemtime(get_template_directory() . '/assets/css/header.css'));

    // Front page CSS
    wp_enqueue_style('jac-front-page-css', get_template_directory_uri() . '/assets/css/front-page.css', array(), filemtime(get_template_directory() . '/assets/css/front-page.css'));
}
add_action('wp_enqueue_scripts', 'jac_enqueue_scripts');

function jac_features()
{
    register_nav_menu('desktop-menu', 'Header Menu');
    register_nav_menu('footer-menu', 'Footer Menu');
    register_nav_menu('mobile-menu', 'Header Menu Mobile');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'jac_features');
