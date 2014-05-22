<?php

/*
Plugin Name: Coopfundify
Plugin URL: https://github.com/aleph1888/coopfundify
Description: Add some customizations to fundify by Astoundify theme.
Version: 0.3.14159265359
Author: enredaos.net
*/


/**
*
* Main plugin initialization.
*/
function coopfy_load_plugin() {

	//Load plugin files
	include ( __DIR__ . "/shop_worker.php" );

}
add_action( 'plugins_loaded', 'coopfy_load_plugin' );

