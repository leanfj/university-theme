<?php 

    function lfwi_university_files ( ) {
        wp_enqueue_style( 'university_styles_files', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'lfwi_university_files' );

?>