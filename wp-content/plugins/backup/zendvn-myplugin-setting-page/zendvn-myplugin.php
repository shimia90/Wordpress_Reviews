<?php
/*
 Plugin Name: ZendVN My Plugin
 Plugin URI: https://zend.vn
 Description: Plugin using for training
 Version: 3.1.11
 Author: Thanh Nguyen
 Author URI: https://automattic.com/wordpress-plugins/
 License: GPLv2 or later
 Text Domain: zendvn-myplugin
 */
define('ZENDVN_MP_PLUGIN_URL', plugin_dir_url(__FILE__));
define('ZENDVN_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ZENDVN_MP_VIEWS_DIR', ZENDVN_MP_PLUGIN_DIR . 'views');
if(is_admin()) {
    require_once ZENDVN_MP_PLUGIN_DIR . 'admin.php';
    new ZendvnMpAdmin();
} else {
    require_once ZENDVN_MP_PLUGIN_DIR . 'public.php';
    new ZendvnMpPublic();
}