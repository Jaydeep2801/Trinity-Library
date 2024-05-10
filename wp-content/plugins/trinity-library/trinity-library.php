<?php

/**
 *
 * @link              https://wordpress.org
 * @since             1.0.0
 * @package           Trinity_Library
 *
 * @wordpress-plugin
 * Plugin Name:       Trinity Library
 * Plugin URI:        https://wordpress.org
 * Description:       This plugin allows to integrate the custom library management for Trinity Library.
 * Version:           1.0.0
 * Author:            Jaydeep Rajgor
 * Author URI:        https://wordpress.org/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       trinity-library
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
define( 'TRINITY_LIBRARY_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-trinity-library-activator.php
 */
function activate_trinity_library() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-trinity-library-activator.php';
	Trinity_Library_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-trinity-library-deactivator.php
 */
function deactivate_trinity_library() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-trinity-library-deactivator.php';
	Trinity_Library_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_trinity_library' );
register_deactivation_hook( __FILE__, 'deactivate_trinity_library' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-trinity-library.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_trinity_library() {

	$plugin = new Trinity_Library();
	$plugin->run();

}
run_trinity_library();
