<?php 

    function lfwi_university_files ( ) {
        wp_enqueue_script( 'university_scripts', get_theme_file_uri( '/js/scripts-bundled.js' ), NULL, microtime(   ), true );
        wp_enqueue_style( 'university_google-fonts_files', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
        wp_enqueue_style( 'university_fontawesome_files', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
        wp_enqueue_style( 'university_styles_files', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'lfwi_university_files' );

?>