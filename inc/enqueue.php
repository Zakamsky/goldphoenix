<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Enqueue scripts and styles.
 */
function goldphoenix_scripts() {

    wp_enqueue_style( '-style', get_template_directory_uri() . '/assets/styles/main.css', array(), _S_VERSION );
    wp_style_add_data( '-style', 'rtl', 'replace' );

    wp_enqueue_script( '-navigation', get_template_directory_uri() . '/assets/scripts/main.js', array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'goldphoenix_scripts' );
