<?php

define('EPG_VERSION', '1.0.7');

function esptheme_scripts() {
    // Styles
    wp_enqueue_style( 'style-app', get_template_directory_uri() . '/assets/css/app.css', array(), EPG_VERSION );
    
    // wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css', array(), EPG_VERSION);

    // wp_enqueue_style( 'fotorama', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css', array(), EPG_VERSION);
    
    // Scripts
    wp_enqueue_script('jquery');

    wp_enqueue_script( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array('jquery'), EPG_VERSION, true);
    
    // wp_enqueue_script( 'geolocation', 'https://cdn.jsdelivr.net/gh/bigdatacloudapi/js-reverse-geocode-client@latest/bigdatacloud_reverse_geocode.min.js', array('jquery'), EPG_VERSION, true);
    
    // wp_enqueue_script( 'fotorama', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', array('jquery'), EPG_VERSION, true);
    
    wp_enqueue_script( 'script-app', get_template_directory_uri() . '/assets/js/app.js', array('jquery'), EPG_VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'esptheme_scripts' );


// Configure theme suport
require_once( get_template_directory() . '/functions/theme-suport.php' );

// Register nav menus
require_once( get_template_directory() . '/functions/nav-menus.php' );