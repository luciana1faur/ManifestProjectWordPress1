<?php

function add_theme_scripts() {
    wp_enqueue_style( 'style', untrailingslashit( get_template_directory_uri() ) . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );