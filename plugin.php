<?php
/*
Plugin Name: HHS plugin
Plugin URI: https://github.com/oxmc/hoover-high-urltheme
Description: This plugin is a custom plugin for hoover high school.
Version: 1.0
Author: oxmc
Author URI: https://oxmc.xyz
*/

// No direct call
if( !defined( 'YOURLS_ABSPATH' ) ) die();


//add css styles to theme
yourls_add_action( 'html_head', 'hhs_add_css_styles' );

function hhs_add_css_styles() {
	$url = yourls_plugin_url( __DIR__ );
	echo <<<HEAD
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
			<title>Hoover High School | link shortener</title>
HEAD;
}
