<?php
/*
Plugin Name: Storm Comments Page
Description: Generate a separate page for comments
Version: 1
Author: Storm Consultancy
Author URI: http://www.stormconsultancy.co.uk
*/

// Tell WordPress about our new query variable
function comments_endpoint_query_vars($vars){
  $vars[] = "comments";
  return $vars;
}
add_filter( 'query_vars', 'comments_endpoint_query_vars');
 
// Add a /comments/ page to all post permalinks
function comments_endpoint_add_endpoint() {
  add_rewrite_endpoint( 'comments', EP_PERMALINK );
}
add_action( 'init', 'comments_endpoint_add_endpoint' );
 
// Change the template used when the permalink has /comments/
function comments_endpoint_template_redirect($templates = "") {
  global $wp_query;
	
	if(!isset( $wp_query->query['comments'] ))
		return $templates;
	
	$templates = locate_template( "comments-single.php", false );
	if( empty($templates) ) { $templates = dirname(__FILE__).'/comments-single.php'; }
	
	return $templates;
}
add_action( 'single_template', 'comments_endpoint_template_redirect' );

// Update comment permalinks
function comments_endpoint_get_comment_link($url)
{
  $urlparts = explode("#", $url);
  return $urlparts[0] . 'comments/#' . $urlparts[1];
}
add_filter('get_comment_link', 'comments_endpoint_get_comment_link');

// Update the page title
function comments_endpoint_wp_title( $title ) {
  global $wp_query;
  if( isset( $wp_query->query['comments'] ) ) {
    return "Comments for " . $title;
  } else {
    return $title;
  }
}
add_filter( 'wp_title', 'comments_endpoint_wp_title', 10, 1 );

// Apply and remove the rewrite rules with plugin activation
function comments_endpoint_activate() {
  comments_endpoint_add_endpoint();
  flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'comments_endpoint_activate' );
 
function comments_endpoint_deactivate() {
  flush_rewrite_rules();
}
register_deactivation_hook( __FILE__, 'comments_endpoint_deactivate' );

?>