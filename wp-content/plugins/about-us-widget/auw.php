<?php
/**
 * Plugin Name:  About Us Widget
 * Plugin URI:   https://wordpress.org/plugins/about-us-widget
 * Description:  Easy installation - No settings needed, just add the link of your image, write desciption and paste link to your about us page or any page. Use widget to show it to your sidebar or footer.
 * Version:      1.0.6
 * Author:       Fernando Villamor Jr
 * Author URI:   http://fernandovillamorjr.com/
 * Author Email: fervillz@gmail.com
 * Text Domain:  auw
 * Domain Path:  /lang
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License as published by the Free Software Foundation; either version 2 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * You should have received a copy of the GNU General Public License along with this program; if not, write
 * to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 *
 * @package    about-us-widget
 * @since      0.1
 * @author     Fernando
 * @copyright  Copyright (c) 2016, Fernando
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class auw {

	/**
	 * PHP5 constructor method.
	 *
	 * @since  0.1
	 */
	public function __construct() {

		// Set the constants
		add_action( 'plugins_loaded', array( &$this, 'constants' ), 1 );

		// Internationalize the text strings used.
		add_action( 'plugins_loaded', array( &$this, 'i18n' ), 2 );

		// Load the admin style
		add_action( 'admin_enqueue_scripts', array( &$this, 'admin_style' ) );

		// Load the frontend style
		add_action( 'wp_enqueue_scripts', array( &$this, 'frontend_style' ) );

		// Register widget
		add_action( 'widgets_init', array( &$this, 'register_widget' ) );

	}

	/**
	 * Define constants (optional)
	 *
	 * @since  0.1
	 */
	public function constants() {

		// Set constant path to the plugin directory.
		define( 'auw_DIR', plugin_dir_path( __FILE__ ) ) ;

		// Set the constant path to the plugin directory URI.
		define( 'auw_URL', plugin_dir_url( __FILE__ ) ) ;

		// Set the constant path to the widgets directory.
		define( 'auw_WIDGETS', auw_DIR . trailingslashit( 'widgets' ) );

		// Set the constant path to the assets directory.
		define( 'auw_ASSETS', auw_URL . trailingslashit( 'assets' ) );

	}

	/**
	 * Loads the translation files.
	 *
	 * @since  0.1
	 */
	public function i18n() {
		load_plugin_textdomain( 'about-us-widget', false, dirname( plugin_basename( __FILE__ ) ) . '/lang/' );
	}


	/**
	 * Register custom style for the frontend settings.
	 *
	 * @since  0.8
	 */
	public function frontend_style() {
		// Loads the widget style.
		wp_enqueue_style( 'auw-frontend-style', trailingslashit( auw_ASSETS ) . 'css/front-end.css', null, null );
	}


	/**
	 * Register custom style for the widget settings.
	 *
	 * @since  0.8
	 */
	public function admin_style() {
		// Loads the widget style.
		wp_enqueue_style( 'auw-admin-style', trailingslashit( auw_ASSETS ) . 'css/auw-admin.css', null, null );
	}

	/**
	 * Register the widget.
	 *
	 * @since  0.9.1
	 */
	public function register_widget() {
		require_once( auw_WIDGETS . '/widget-about.php' );
		register_widget( 'auw_widget' );
	}

}

new auw;