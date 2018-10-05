<?php
namespace DD;

/**
 * Plugin Name: Data Dog Plugin for Wordpress.
 * Plugin URI: https://github.com/arunchaitanyajami/php-datadog
 * Description:  Data Dog Plugin for Wordpress.
 * Version: 1.0
 * Author: Arun Chaitanya Jami
 * Author URI: https://github.com/achaitanyajami
 */

use DD\classes\admin\DD_Admin;

define( 'DD_PLUGIN_BASE_DIR', __DIR__ );
define( 'DD_PLUGIN_DIR_URL', plugin_dir_url( __FILE__ ) );

/**
 * Included Files.
 */
function autoload() {
	$directories = [
		'classes/base/',
		'classes/',
		'classes/admin/',
	];

	if ( empty( $directories ) ) {
		return;
	}

	/**
	 * Loop.
	 */
	foreach ( $directories as $directory ) {
		foreach ( glob( DD_PLUGIN_BASE_DIR . '/' . $directory . "*.php" ) as $class ) {
			require_once $class;
		}
	}
}


/**
 * Initiate the plugin.
 */
add_action('init', function (){
	autoload();
	new DD_Admin();
});


/**
 * Add necessary data when activation of plugin.
 */
function dd_activation_hook() {
	add_option( 'dd_api_key', '' );
	add_option( 'dd_app_key', '' );
}

register_activation_hook( __FILE__, 'dd_activation_hook' );

/**
 * Remove unwanted data when deactivating the plugin.
 */
function dd_deactivation_hook() {
	delete_option( 'dd_api_key' );
	delete_option( 'dd_app_key' );
}

register_deactivation_hook( __FILE__, 'dd_deactivation_hook' );
