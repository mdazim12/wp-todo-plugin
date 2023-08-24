<?php

if( !defined ('ABSPATH')){
    exit();
}
/*
 * Plugin Name:       WP Todo
 * Plugin URI:        https://github.com/mdazim12/wp-todo-plugin
 * Description:       This plugin is developed for practic perpose.
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Md Azim Uddin
 * Author URI:        https://github.com/mdazim12
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       wpdoto
 * Domain Path:       /languages
 */

 register_activation_hook(__FILE__,'wpdoto_activation');

 function wpdoto_activation(){
    echo 'hellpw';
 }

//action Hook

add_action( 'save_post', 'wpdoto_save_callback' );

function wpdoto_save_callback(){
   var_dump('saved Post');
   exit( );
}


 













