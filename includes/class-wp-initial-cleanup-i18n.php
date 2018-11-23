<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://oshka.000webhostapp.com/
 * @since      1.0.0
 *
 * @package    Wp_Initial_Cleanup
 * @subpackage Wp_Initial_Cleanup/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Initial_Cleanup
 * @subpackage Wp_Initial_Cleanup/includes
 * @author     Olha Babchenko <olkace@gmail.com>
 */
class Wp_Initial_Cleanup_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-initial-cleanup',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
