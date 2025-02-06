<?php 

load_theme_textdomain('agencyTextDomain', get_template_directory() . '/languages');

// add_theme_support( 'post-thumbnails' );
// add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );




if(!function_exists('myFirstThemeSetump')){
    function myFirstThemeSetump(){

        register_nav_menus(array(
            'top_menu' => __('Top Menu', 'agencyTextDomain')
        ));
        
        }
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
}


add_action('after_setup_theme', 'myFirstThemeSetump');

// add_theme_support('menus');
// add_theme_support('widgets');


if(!function_exists('agency_setup_theme')){
    function agency_setup_theme(){
        // add_theme_support('post-thumbnails');
        // add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

        // add_theme_support( 'post-thumbnails' );
        // add_theme_support( 'post-formats',  array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
    }
}



add_action('after-setup-theme', 'adency_setup_theme');



if(!function_exists('agency_service')){
    function agency_service(){
        register_post_type('service', 
            array(
                'labels' => array(
                    'name' => __('Amar Services', 'agencyTextDomain'),
                    'singular_name' => __('Amar Service', 'agencyTextDomain'),
                    'add_new_item' => __( 'Add New Service' ),
                    'not_found' => __( 'No Service found' ),
                    'not_found_in_trash' => __( 'No Service found in Trash' ),
                    'featured_image' => __( 'Service Images'),
                    'set_featured_image' => __( 'Set Service Images'),
                ),
                'public' => true,
                'supports' => array('title', 'editor', 'thumbnail'),
                'supports' => array('title', 'editor', 'thumbnail'),
                'taxonomies' => array('mystudentdepartment'),
                'has_archive' => true

            ));
    }
}



add_action('init', 'agency_service');






?>