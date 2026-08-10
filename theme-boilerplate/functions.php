<?php

function theme() {
    add_theme_support("title-tag");
    add_theme_support("post-thumbnails");
}

add_action("after_setup_theme", "theme");

function enqueue_scripts() {
    wp_enqueue_style("style", get_template_directory_uri() . '/css/style.css', false, '1.0', 'all');
    wp_enqueue_script("script", get_template_directory_uri() . '/js/script.js', array(), '1.0', true);
}

add_action("wp_enqueue_scripts", "enqueue_scripts");