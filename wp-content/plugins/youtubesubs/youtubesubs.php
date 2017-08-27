<?php
/*
 Plugin Name: YouTube Sub
 Description: Show youtube submit button
 Version: 1.0.0
 Author: Patryk Piwko
 Text Domain: health-check
 Domain Path: /languages
 */

if(!defined('ABSPATH')){
    exit;
}

require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');

require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs_class.php');

function register_youtubesubs(){
    register_widget('YouTube_Subs_Widget');
}

add_action('widgets_init', 'register_youtubesubs');