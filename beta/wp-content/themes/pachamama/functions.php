<?php

function setup_scripts() {
  wp_deregister_script('jquery'); 
  wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js'); 
  wp_enqueue_script('jquery'); 
  wp_register_script('ggs', get_template_directory_uri() . '/js/GGS.js');
  wp_register_script('wy', get_template_directory_uri() . '/js/wy.js', array( 'jquery' ));
  wp_register_script('jquery-easing', get_template_directory_uri() . '/js/jquery.easing.js', array( 'jquery' ));
  wp_enqueue_script('jquery-easing');
  wp_enqueue_script('ggs');
  wp_enqueue_script('wy');
}

add_action( 'wp_enqueue_scripts', 'setup_scripts' );

?>