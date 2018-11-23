<?php

/*
Plugin Name: BCT Quote Plugin
Plugin URI: https://github.com/tyniuk/bctqp
Description: A custom plugin to add recommendations and quotes to BCT website
Version: 0.0.0.3
Author: Liam Cuver
Author URI: http://tyni.uk
*/


/**************************************************************************
* Function github_plugin_updater_test_init()
* Update Plugin from Repo
**************************************************************************/

add_action( 'init', 'github_plugin_updater_test_init' );

function github_plugin_updater_test_init() {
	include_once 'inc/updater.php';
	define( 'WP_GITHUB_FORCE_UPDATE', true );
	if ( is_admin() ) { // note the use of is_admin() to double check that this is happening in the admin
		$config = array(
			'slug' => plugin_basename( __FILE__ ),
			'proper_folder_name' => dirname( plugin_basename( __FILE__ ) ),
			'api_url' => 'https://api.github.com/repos/tyniuk/bctqp',
			'raw_url' => 'https://raw.github.com/tyniuk/bctqp/master',
			'github_url' => 'https://github.com/tyniuk/bctqp',
			'zip_url' => 'https://github.com/tyniuk/bctqp/archive/master.zip',
			'sslverify' => true,
			'requires' => '3.0',
			'tested' => '3.3',
			'readme' => 'README.md',
			'access_token' => '',
		);
		new WP_GitHub_Updater( $config );
	}
}



function bctqp_enqueue_scripts() {

//LOREM



}


add_action( 'wp_enqueue_scripts', 'bctqp_enqueue_scripts' );





 ?>
