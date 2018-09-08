<?php
/**
 * Plugin Name: Wordpress Base Plugin Template
 * Plugin URI: http://restulestari.com
 * Description: This plugin is a template plugin 
 * Version: 1.0.0
 * Author: Ghazali Tajuddin
 * Author URI: http://www.ghazalitajuddin.com
 * License: GPL2
 * 
 * https://developer.wordpress.org/resource/dashicons/
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Check if class not exist
if ( ! class_exists( 'BasePlugin' ) ) {

	class BasePlugin {

	
		function __construct() {

			//Add Admin Menu
			//add_action('admin_menu', 'function_name');
			add_action('admin_menu', array($this,'addBasePluginMenu'));

		}

		////////////////////////////////////////////////////////////////
   		//Create Plugin Menu
	    ////////////////////////////////////////////////////////////////

		function addBasePluginMenu(){
			
			//Add Menu Page
			//add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $function = '', string $icon_url = '', int $position = null )
			add_menu_page("Wodpress Base Plugin Page","Base Plugin","manage_options","wordpress_base_blugin_slug",array($this,"my_plugin_options"),"dashicons-admin-plugins");
	
		}

		////////////////////////////////////////////////////////////////
   		//Create Plugin Option
	    ////////////////////////////////////////////////////////////////
	    
	    function my_plugin_options() {
	    	//global $title;
   		 ?>
        <h2>MENU PAGE</h2>
        This is your option page. Do what you want here!
        <?php

	    }


	}//close class




}// close if class exist


if( is_admin() )
  $basePluginPage = new BasePlugin();


?>