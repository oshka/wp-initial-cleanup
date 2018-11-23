<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://oshka.000webhostapp.com/
 * @since             1.0.0
 * @package           Wp_Initial_Cleanup
 *
 * @wordpress-plugin
 * Plugin Name:       Wordpress Initial Cleanup and Customizing
 * Plugin URI:        https://oshka.000webhostapp.com/
 * Description:       Dynamically add new images sizes, customize the login page, optionally clean up the head section, optionally remove injected CSS for the comment widget, optionally remove injected CSS for galleries, optionally add a Post slug to the body class, optionally load jQuery from a CDN, and many other useful options
 * Version:           1.0.0
 * Author:            Olha Babchenko
 * Author URI:        https://oshka.000webhostapp.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-initial-cleanup
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-initial-cleanup-activator.php
 */
function activate_wp_initial_cleanup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-initial-cleanup-activator.php';
	Wp_Initial_Cleanup_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-initial-cleanup-deactivator.php
 */
function deactivate_wp_initial_cleanup() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-initial-cleanup-deactivator.php';
	Wp_Initial_Cleanup_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_initial_cleanup' );
register_deactivation_hook( __FILE__, 'deactivate_wp_initial_cleanup' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-initial-cleanup.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_initial_cleanup() {

	$plugin = new Wp_Initial_Cleanup();
	$plugin->run();

}
run_wp_initial_cleanup();
