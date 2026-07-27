<?php

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
		'site-custom',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/css/custom.css' )
	);
}, 20 );

add_action( 'after_setup_theme', function() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'event-featured', 800, 450, true ); // true = hard crop
} );

/**
 * Single source of truth for resolving an event's full record:
 * plain ACF fields + the three taxonomy relationships
 * (staff/coordinator, venue, event_category), which get_fields()
 * cannot reach on its own.
 */
function oswp_get_event_record( $post_id ) {
	$record = get_fields( $post_id );
	if ( ! is_array( $record ) ) {
		$record = [];
	}
            $record['id']    = $post_id;
	$record['title'] = get_the_title( $post_id );

	foreach ( [ 'staff', 'venue', 'event_category' ] as $taxonomy ) {
		$terms = wp_get_post_terms( $post_id, $taxonomy );
		$record[ $taxonomy ] = ( ! is_wp_error( $terms ) && $terms )
			? wp_list_pluck( $terms, 'name' )
			: [];
	}
	return $record;
}

function oswp_hide_if_empty( $value ) {
	return empty( $value ) ? 'is-hidden' : '';
}
