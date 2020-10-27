<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


$goldphoenix_includes = array(
    '/theme-settings.php',                  // Theme setup and custom theme supports. Initialize theme default settings.
    '/widgets.php',                         // Register widget area.
    '/enqueue.php',                         // Enqueue scripts and styles.
    '/custom-header.php',
    '/template-tags.php',                 // Custom template tags for this theme.
    '/template-functions.php',
    '/pagination.php',                      // Custom pagination for this theme.
//    '/extras.php',                          // Custom functions that act independently of the theme templates.
    '/customizer.php',                      // Customizer additions.
    '/jetpack.php',                         // Load Jetpack compatibility file.
    '/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/goldphoenix/goldphoenix/issues/567
    '/breadcrumbs.php', 					// Load custom breadcrumbs
    '/acf-functions.php', 					// Load custom ACF bocks for Gutenberg
    '/woocommerce.php',                     // Load WooCommerce functions.

);

foreach ( $goldphoenix_includes as $file ) {
    require_once get_template_directory() . '/inc' . $file;
}
/**
 * Load Jetpack compatibility file.
 */
//	require get_template_directory() . '/inc/jetpack.php';

