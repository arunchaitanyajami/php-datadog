<?php
$config = [
	'api_key' => apply_filters( 'dd_api_key', get_option( 'dd_api_key', '' ) ),
	'app_key' => apply_filters( 'dd_app_key', get_option( 'dd_app_key', '' ) ),
];
$config = apply_filters( 'dd_config', $config );