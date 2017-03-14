<?php

function thehamburgercollection_resources() {

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('app', get_bloginfo('stylesheet_directory') . '/js/app.js', array( 'jquery' ), '1.0.0');
}

add_action('wp_enqueue_scripts', 'thehamburgercollection_resources');

// Navigation Menus
register_nav_menus(array(
    'primary' => __( 'Primary Menu')
));