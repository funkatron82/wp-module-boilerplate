<?php
//Wordpress Code Module Boilerplate

//If statement prevents multiple instances of module colliding with each other
if( !defined( 'MODULE_DIR' ) && !defined( 'MODULE_URL' ) ){
	//Define Constants for directories and Urls
	define( 'MODULE_DIR', plugin_dir_path( __FILE__  ) );
	define( 'MODULE_URL', plugin_dir_url( __FILE__ ) );
	
	if( is_admin() ){
		//Admin includes/code goes here
		
		//Admin script/styles
		add_action( 'admin_enqueue_scripts', 'module_enqueue_admin_scripts', 5 );
	} else {
		//Front end includes/code goes here	
		
		//Front end script/styles
		add_action( 'wp_enqueue_scripts', 'module_enqueue_scripts', 5 );
	}
	
	function module_enqueue_admin_scripts() {
		//Register admin styles and scripts.  You can enqueue in your code later
	}
	
	function module_enqueue_scripts() {
		//Register front end styles and scripts.  You can enqueue in your code later
	}
}