<?php

if ( ! isset( $content_width ) ) {
    $content_width = 940;
}

if ( ! function_exists( 'pzw_setup' ) ) {

    function pzw_setup() {
     
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );

        register_nav_menu( 'primary', 'Primary Menu' );

        /**
         * Enable support for the following post formats:
         * aside, gallery, quote, image, and video
         */
        add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );

    }

}

add_action( 'after_setup_theme', 'pzw_setup' );

if ( ! function_exists( 'pzw_scripts_and_styles' ) ) {

    function pzw_scripts_and_styles() {

        $cache_ver = '1.0';

        wp_register_style( 'global', get_template_directory_uri() . '/assets/css/style.css?v='.time(), array(), false, 'all' );
        // wp_register_style( 'global', get_template_directory_uri() . '/assets/css/style.css', null, $cache_ver, 'all' );
        wp_register_script( 'global', get_template_directory_uri() . '/assets/js/main.js', array(), $cache_ver, true );

        wp_enqueue_style( 'global' );
        wp_enqueue_script( 'global' );

    }

}

add_action( 'wp_enqueue_scripts', 'pzw_scripts_and_styles' );



/* excerpt options */
function pzw_excerpt_length( $length ) {
    return 20;
}

add_filter( 'excerpt_length', 'pzw_excerpt_length');

function new_excerpt_more( $more ) {
    return '...'; // replace the normal [.....] with a empty string
}  

add_filter('excerpt_more', 'new_excerpt_more');


/* author option */
add_filter( 'the_author', 'guest_author_name' );
add_filter( 'get_the_author_display_name', 'guest_author_name' );
 
function guest_author_name( $name ) {
    global $post;
     
    $author = get_post_meta( $post->ID, 'autor', true );
     
    if ( $author )
    $name = $author;
     
    return $name;
}

?>