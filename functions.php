<?php 

    function lfwi_university_files ( ) {
        wp_enqueue_script( 'university_scripts', get_theme_file_uri( '/js/scripts-bundled.js' ), NULL, microtime(   ), true );
        wp_enqueue_style( 'university_google-fonts_files', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
        wp_enqueue_style( 'university_fontawesome_files', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'university_styles_files', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'lfwi_university_files' );

    function lfwi_university_features () {
        register_nav_menu( 'headerMenuLocation', 'Header Menu Location' );
        register_nav_menu( 'footerLocationOne', 'Footer Location One' );
        register_nav_menu( 'footerLocationTwo', 'Footer Location Two' );
        add_theme_support( 'title-tag' );
    }

    add_action( 'after_setup_theme', 'lfwi_university_features' );

    // <?php
    // function lfwi_university_post_types() {
    //   register_post_type( 'event', array(
    //     'supports' => array('title', 'editor', 'excerpt'),
    //     'rewrite' => array('slug' => 'events'),
    //     'public' => true,
    //     'menu_icon' => 'dashicons-calendar-alt',
    //     'labels' => array(
    //       'name' => 'Events',
    //       'add_new_item' => 'Add New Events',
    //       'edit_item' => 'Edit Event',
    //       'all_items' => 'All Events',
    //       'singular_name' => 'Event'
    //     ),
    //     'has_archive' => true,
    //   ) );
    // }
    // add_action( 'init', 'lfwi_university_post_types');