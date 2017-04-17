<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<!-- Boostrap -->
	<link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
	<!-- End Bootstrap -->
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

		<div id="header">
	      <div class="container h-header">
	      <div class="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.jpg" alt="<?php bloginfo('name'); ?>"></a></div>
	        <div class="header-right">
	          <div class="call">CALL US: 530-342-899</div>
	          <div class="b-header"><a href="#">LIVE CHAT</a></div>
	          <div class="clearall"></div>
	          <div class="b-header"><a href="#">LOG IN</a></div>
	        </div>
	        <div class="clearall"></div>
	      </div>

	      <section id="navigation">
	      <div class="container">
	        <div class="row">
	        <div class="navbar navbar-default" role="navigation">
	            <div class="navbar-header">
	              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	              </button>
	            </div>
	            <div class="navbar-collapse collapse">
	              <?php
	              	wp_nav_menu(
	              		array(
	              			'menu' 				=>	'Main Menu',
	              			'container' 		=>	'ul',
	              			'menu_class' 		=>	'menu nav navbar-nav',
	              			'walker' 			=> 	new My_Walker_Nav_Menu()
	              		)
	              	);
	              ?>
	            </div>
	        </div>
	          <div class="clearboth"></div><!-- clearboth -->
	        </div><!-- row -->
	      </div><!-- container -->
	      </section><!-- navigation -->
	    </div><!-- header -->