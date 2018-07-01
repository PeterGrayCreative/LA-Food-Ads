<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://LAFOOD.com
 * @since             1.0.0
 * @package           LA_Food_Marketing
 *
 * @wordpress-plugin
 * Plugin Name:       LA Food Marketing
 * Plugin URI:        http://LAFOOD.com/
 * Description:       A Plugin built to manage WordPress ad spots
 * Version:           1.0.0
 * Author:            LA FOOD
 * Author URI:        http://LAFOOD.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       la-food
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
define( 'LA_FOOD_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-la-food-activator.php
 */
function activate_la_food() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-la-food-activator.php';
	LA_FOOD_Marketing_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-la-food-deactivator.php
 */
function deactivate_la_food() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-la-food-deactivator.php';
	LA_FOOD_Marketing_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_la_food' );
register_deactivation_hook( __FILE__, 'deactivate_la_food' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-la-food.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_la_food() {

	$plugin = new LA_FOOD_Marketing();
	$plugin->run();

}
run_la_food();
