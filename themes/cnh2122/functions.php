<!-- For raw php code that can change how WP works fundamentally -->

<?php 

function sunnyCNH_theme_support(){

    //Adds dynamic title tag support
    add_theme_support('title-tag');

}

add_action('after_setup_theme', 'sunnyCNH_theme_support');

function sunnyCNH_register_styles() {
    //Will load the necessary libraries for the front page of the CNH Website
    //Array parameter is an array of dependencies; 1st parameter is just a custom reference name 
    $version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('sunnyCNH-style', get_template_directory_uri()."/style.css", array('sunnyCNH-bootstrap'), $version, 'all');
    wp_enqueue_style('sunnyCNH-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('sunnyCNH-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action('wp_enqueue_scripts', 'sunnyCNH_register_styles');

function sunnyCNH_register_scripts() {
    //Will load the necessary libraries for the front page of the CNH Website
    //Array parameter is an array of dependencies; 1st parameter is just a custom reference name 
    wp_enqueue_script('sunnyCNH-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('sunnyCNH-popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('sunnyCNH-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    
    //Remember to move the main.js file to the proper directory
    wp_enqueue_style('sunnyCNH-main', get_template_directory_uri(). "/assets/js/main.js", array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'sunnyCNH_register_scripts');

?>