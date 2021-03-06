<?php

function lagom_child_enqueue_styles() {

    $parent_style = 'lagom-stylesheet';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'lagom-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'lagom_child_enqueue_styles' );

/* --------- Her indsættes egne funktioner --------- */

