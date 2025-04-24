<?php

function theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('menu-js', get_template_directory_uri() . '/js/menu.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

function register_theme_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme-textdomain'),
    ));
}
add_action('after_setup_theme', 'register_theme_menus');