<?php 

function custom_wp_title( $title, $sep ) {
	global $page;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	} 

	return $title;

} 
add_filter( 'wp_title', 'custom_wp_title', 20, 2 );



// https://tommcfarlin.com/filter-wp-title/

?>