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
// Relative Path
define('ZENDVN_MP_PLUGIN_URL', plugin_dir_url(__FILE__));

// Absolute Path
define('ZENDVN_MP_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('ZENDVN_MP_VIEWS_DIR', ZENDVN_MP_PLUGIN_DIR . 'views');
define('ZENDVN_MP_WIDGET_DIR', ZENDVN_MP_PLUGIN_DIR . 'widgets');
if(is_admin()) {
    require_once ZENDVN_MP_PLUGIN_DIR . 'admin.php';
    new ZendvnMpAdmin();

    require_once ZENDVN_MP_WIDGET_DIR . '/db_simple.php';
    new Zendvn_Mp_Db_Simple();

} else {
    require_once ZENDVN_MP_PLUGIN_DIR . 'public.php';
    new ZendvnMpPublic();
}

require_once ZENDVN_MP_WIDGET_DIR . '/last_post.php';

function last_post_widget_init() {
    register_widget('Zendvn_Mp_Widget_Last_Post');
}

add_action('widgets_init', 'last_post_widget_init');