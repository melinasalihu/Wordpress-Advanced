<?php
function load_script(){
    // Rreshti 3
    wp_enqueue_style('style', get_stylesheet_uri());

    // Rreshti 5 - KORRIGJUAR: 'wp_enqueue_script' dhe shtimi i presjes (,)
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', false);
}
add_action('wp_enqueue_scripts', 'load_script');
?>