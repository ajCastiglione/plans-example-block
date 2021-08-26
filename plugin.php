<?php
/**
 * Plugin Name: React & Gutenberg
 * Description: react & gutenberg, trying to sideload react and make a dynamic block use it.
 * Author: Antonio for WPE
 * Author URI: https://wpengine.com/
 * Version: 1.0.0
 *
 * @package WPE
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Initializer.
 */
require_once plugin_dir_path( __FILE__ ) . 'src/init.php';
