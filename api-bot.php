<?php

/**
 * @link              https://jamessteinbach.com
 * @since             1.0.0
 * @package           API_Bot
 *
 * @wordpress-plugin
 * Plugin Name:       API Bot 🤖
 * Plugin URI:        https://jamessteinbach.com/api-bot/
 * Description:       This plugin provides a framework for accessing 3rd party APIs via PHP in server-side PHP templates and via Ajax through front-end JS.
 * Version:           1.0.0
 * Author:            James Steinbach
 * Author URI:        https://jamessteinbach.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       api-bot
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-api-bot-activator.php
 */
function activate_api_bot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-bot-activator.php';
	API_Bot_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-api-bot-deactivator.php
 */
function deactivate_api_bot() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-api-bot-deactivator.php';
	API_Bot_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_api_bot' );
register_deactivation_hook( __FILE__, 'deactivate_api_bot' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-api-bot.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_api_bot() {

	$plugin = new API_Bot();
	$plugin->run();

}
run_api_bot();
