<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
	// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }

    if(function_exists('register_nav_menus')) {
        register_nav_menus(
            array(
                'main_nav'  =>  'Main Navigation Menu'
            )
        );
    }

    require_once(dirname(__FILE__) . '/inc/walker_menu.php');

    if(function_exists('add_theme_support')) {
        add_theme_support('post-thumbnails');
    }

    function new_excerpt_length($length) {
        return 40;
    }
    add_filter('excerpt_length', 'new_excerpt_length');

    function new_excerpt_more($more) {
        global $post;
        return '<a class="more-link" href="'.get_permalink($post->ID).'">Continue Reading</a>';
    }
    add_filter('excerpt_more', 'new_excerpt_more');

    function new_enqueue_script() {
        if(!is_admin()) {
            wp_enqueue_script( 'bootstrap-js', get_bloginfo('template_directory') . '/js/bootstrap.min.js', array('jquery'), '0.1' );
            wp_enqueue_script( 'smartmenus-bootstrap-js', get_bloginfo('template_directory') . '/js/jquery.smartmenus.bootstrap.js', array(), '0.1' );
            wp_enqueue_script( 'smartmenus-js', get_bloginfo('template_directory') . '/js/jquery.smartmenus.js', array(), '0.1' );
        }
    }
    add_action('wp_enqueue_scripts', 'new_enqueue_script');

    // Create Theme Option Page
    include (TEMPLATEPATH . '/inc/theme-options.php');
?>