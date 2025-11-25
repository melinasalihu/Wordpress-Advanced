<?php
function load_script(){
    // Rreshti 3
    wp_enqueue_style('style', get_stylesheet_uri());

    // Rreshti 5 - KORRIGJUAR: 'wp_enqueue_script' dhe shtimi i presjes (,)
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'load_script');

function config(){
    register_nav_menus(
        array(
            'wp_devs_main_menu '=> 'Main Menu',
            'wp_devs_footer_menu' => 'Footer Menu'
        )
        );

    $args = array(
        'height' => 225,
        "width" => 1920
    );
    add_theme_support('custom-header',$args);    
    add_theme_support('post-thumbnails',);    
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));  
    add_theme_support('automatic-feed-links');
    add_theme_support('html5', array('commit-list', 'search-form','gallery', 'caption', 'style', 'script')); 
}
add_action('after_setup_theme','config',0);
?>