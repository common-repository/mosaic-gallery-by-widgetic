<?php

/**
 * Plugin Name: 	  Mosaic Gallery by Widgetic
 * Contributors: 	  Widgetic
 * Plugin URI:		  https://wordpress.org/plugins/mosaic-gallery-by-widgetic/
 * Description: 	  Automatically generate a mosaic gallery from your photos.
 * Version: 		  1.0.40
 * Requires at least: 5.4
 * Requires PHP:      7.0
 * Author: 			  Widgetic
 * Author URI: 		  https://profiles.wordpress.org/widgetic/#content-plugins
 * License: 		  GPL v2
 */


defined("ABSPATH") || exit;

// IMPORT DASHBOARD
require_once(plugin_dir_path(__FILE__) . "dashboard.php");

// IMPORT BLOCK
require_once(plugin_dir_path(__FILE__) . "block.php");