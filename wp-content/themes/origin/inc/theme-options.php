<?php
	add_action('admin_menu', 'origin_menu_page');

	// 01. Create Menu in admin dashboard
	function origin_menu_page() {
		add_theme_page('Origin Theme Option', 'Theme Options', 'manage_options', 'origin-theme-option', 'origin_setting_page');
		add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function );
	}

	// 02. Create Menu Page in admin
	function origin_setting_page() {
		require_once (dirname(__FILE__) . '/html/option-page.php');
	}

	add_action('admin_init', 'origin_register_setting');
	// 03. Register Setting
	function origin_register_setting() {
		register_setting( 'origin-group', 'origin-num-slide' );
	}
?>