<?php 
/*
Template Name: Homepage
*/
get_header(); 
?>

<?php get_template_part( 'inc/home', 'slider' ); ?>

<?php
	if(have_posts()) : while(have_posts()) : the_post();
		the_content();
	endwhile;
	endif;
?>

<?php get_footer(); ?>