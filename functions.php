<?php

// Actions
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('ldc-theme', get_stylesheet_directory_uri() . '/style.css');
}, 1000);
