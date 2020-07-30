<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://blogmail.co/
 * @since             1.0.0
 * @package           blogmail
 *
 * @wordpress-plugin
 * Plugin Name:       blogmail newsletter
 * Plugin URI:        https://github.com/blogmail/blogmail-wordpress-plugin
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.3
 * Author:            blogmail
 * Author URI:        https://blogmail.co/
 * License:           MIT
 * License URI:       https://opensource.org/licenses/MIT
 * Text Domain:       blogmail
 * Domain Path:       /languages
 * GitHub Plugin URI: blogmail/blogmail-wordpress-plugin
 * GitHub Plugin URI: https://github.com/blogmail/blogmail-wordpress-plugin
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
define( 'BLOGMAIL_VERSION', '1.0.2' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-blogmail-activator.php
 */
function activate_blogmail() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-blogmail-activator.php';
	blogmail_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-blogmail-deactivator.php
 */
function deactivate_blogmail() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-blogmail-deactivator.php';
	blogmail_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_blogmail' );
register_deactivation_hook( __FILE__, 'deactivate_blogmail' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-blogmail.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_blogmail() {

	$plugin = new Blogmail();
	$plugin->run();

}
run_blogmail();
