<?php
namespace DD\classes\admin;
/**
 * Admin Pages
 */

class DD_Admin {
	public function __construct() {
		add_action( 'admin_menu', [ $this, 'register_menu_page' ] );
	}

	public function register_menu_page() {
		add_menu_page(
			__( 'Data Dog', 'textdomain' ),
			'Data Dog',
			'manage_options',
			'custompage',
			[ $this, 'menu_page' ],
			'dashicons-chart-area',
			6
		);
	}

	public function menu_page(){
		$this->handel_request();

		require_once DD_PLUGIN_BASE_DIR.'/views/main_page.php';
	}

	public function handel_request() {
		if ( isset( $_REQUEST['auth-submit'] ) ) {
			$api_key = filter_input( INPUT_POST, 'dd_api_key', FILTER_SANITIZE_STRING );
			$app_key = filter_input( INPUT_POST, 'dd_app_key', FILTER_SANITIZE_STRING );
			update_option( 'dd_api_key', $api_key, true );
			update_option( 'dd_app_key', $app_key, true );
		}
	}
}