<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Основные настройки',
        'menu_title'	=> 'Основные настройки',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_pages',
        'redirect'		=> false,
        'position' => '7.3',
        'icon_url' => 'dashicons-welcome-widgets-menus',
    ));

//    acf_add_options_sub_page(array(
//        'page_title' 	=> 'Theme Header Settings',
//        'menu_title'	=> 'Header',
//        'parent_slug'	=> 'theme-general-settings',
//    ));



}

//function firstbyte_register_blocks() {
//
//    if( function_exists('acf_register_block_type') ) {
//
//        acf_register_block_type(array(
//            'name'              => 'smart_table',
//            'title'             => __('Умная таблица'),
//            'description'       => __('Таблица трансформирующаяся в блоки'),
//            'render_template'   => 'template-parts/blocks/smart-table.php',
//            'category'          => 'formatting',
//            'mode' => 'edit',
//            'icon' => 'grid-view',
//        ));
//
//        acf_register_block_type(array(
//            'name'              => 'faq',
//            'title'             => __('FAQ'),
//            'description'       => __('Выпадающие блоки вопросов и ответов'),
//            'render_template'   => 'template-parts/blocks/faq.php',
//            'category'          => 'formatting',
//            'mode' => 'edit',
//            'icon' => 'plus-alt',
//        ));
//
//        acf_register_block_type(array(
//            'name'              => 'alert',
//            'title'             => __('Сноска'),
//            'description'       => __('Уточняющая сноска в виде алерта'),
//            'render_template'   => 'template-parts/blocks/alert.php',
//            'category'          => 'formatting',
//            'mode' => 'edit',
//            'icon' => 'admin-comments',
//        ));
//
//        acf_register_block_type(array(
//            'name'              => 'big-circle',
//            'title'             => __('Круг Преимуществ'),
//            'description'       => __('Круговая диаграмма с преимуществами'),
//            'render_template'   => 'template-parts/blocks/big-circle.php',
//            'category'          => 'formatting',
//            'mode' => 'edit',
//            'icon' => 'sos',
//        ));
//    }
//}
//
//
//
//add_action('acf/init', 'firstbyte_register_blocks');