<?php
/**
 * VisGov.
 *
 * This file adds the iframeable template to the VisGov Theme.
 *
 * @package VisGov
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

//* Template Name: Iframeable page

//* Add landing page body class to the head
add_filter( 'body_class', 'vb_iframe_class' );
function vb_iframe_class( $classes ) {

	$classes[] = 'vb-iframe-page';

	return $classes;

}

//* Remove Skip Links
remove_action ( 'genesis_before_header', 'genesis_skip_links', 5 );
//* Dequeue Skip Links Script
add_action( 'wp_enqueue_scripts', 'genesis_sample_dequeue_skip_links' );
function genesis_sample_dequeue_skip_links() {

	wp_dequeue_script( 'skip-links' );

}

//* Force full width content layout
add_filter( 'genesis_site_layout', '__genesis_return_full_width_content' );

//* Remove site header elements
remove_action( 'genesis_header', 'genesis_header_markup_open', 5 );
remove_action( 'genesis_header', 'genesis_do_header' );
remove_action( 'genesis_header', 'genesis_header_markup_close', 15 );

//* Remove navigation
remove_theme_support( 'genesis-menus' );

//* Remove breadcrumbs
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );

//* Remove post title
remove_action( 'genesis_entry_header','genesis_do_post_title' );

//* Remove footer widgets
remove_action( 'genesis_before_footer', 'genesis_footer_widget_areas' );

//* Remove site footer elements
remove_action( 'genesis_footer', 'genesis_footer_markup_open', 5 );
remove_action( 'genesis_footer', 'genesis_do_footer' );
remove_action( 'genesis_footer', 'genesis_footer_markup_close', 15 );

//* Run the Genesis loop
echo '<div style="display:block;"';
genesis();
echo '<div style="clear:both;">&nbsp;</div></div>';
