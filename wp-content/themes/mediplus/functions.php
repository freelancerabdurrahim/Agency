<?php 

load_theme_textdomain('agencyTextDomain', get_template_directory() . '/languages');




if(!function_exists('myFirstThemeSetump')){
    function myFirstThemeSetump(){

        register_nav_menus(array(
            'top_menu' => __('Top Menu', 'agencyTextDomain')
        ));
        
        }
}


add_action('after_setup_theme', 'myFirstThemeSetump');



?>