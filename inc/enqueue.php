<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue scripts and styles.
 */
function goldphoenix_scripts() {

    $gf_version = 1.1;

    wp_enqueue_style( 'goldphoenix-style', get_template_directory_uri() . '/assets/styles/main.css', array(), $gf_version );
    wp_style_add_data( '-style', 'rtl', 'replace' );
    wp_enqueue_style( 'dashicons' );


    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/scripts/bootstrap.bundle.min.js', array('jquery'), $gf_version, true );
    wp_enqueue_script( 'goldphoenix-script', get_template_directory_uri() . '/assets/scripts/main.js', array('jquery'), $gf_version, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'goldphoenix_scripts' );
