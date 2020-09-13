<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function goldphoenix_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Сайдбар', 'goldphoenix' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'goldphoenix' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Подвал кол. 1', 'goldphoenix' ),
            'id'            => 'footer-1',
            'description'   => esc_html__( 'Add widgets here.', 'firstbyte' ),
            'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Подвал кол. 2', 'goldphoenix' ),
            'id'            => 'footer-2',
            'description'   => esc_html__( 'Add widgets here.', 'firstbyte' ),
            'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => esc_html__( 'Подвал кол. 3', 'goldphoenix' ),
            'id'            => 'footer-3',
            'description'   => esc_html__( 'Add widgets here.', 'firstbyte' ),
            'before_widget' => '<section id="%1$s" class="widget footer-widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        )
    );
}
add_action( 'widgets_init', 'goldphoenix_widgets_init' );
