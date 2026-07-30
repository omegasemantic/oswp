<?php
/**
 * functions.php overview
 *
 * 1. wp_enqueue_scripts hook: loads custom.css, using the file's own
 *    modification time as the version string, so edits bust the cache
 *    automatically — no manual version bump needed.
 *
 * 2. after_setup_theme hook: turns on featured images and defines the
 *    'event-featured' image size (800x450, hard-cropped) used on
 *    single-event.php.
 *
 * 3. oswp_get_event_record( $post_id ): single source of truth for a
 *    full event record. get_fields() (an ACF function) returns all
 *    ACF field values, but can't see taxonomies (staff, venue,
 *    event_category), so those are fetched separately via
 *    wp_get_post_terms() and merged in. wp_list_pluck( $terms, 'name' )
 *    reduces each taxonomy's term objects down to a plain list of
 *    name strings. End result: one flat array with every field and
 *    every taxonomy relationship, regardless of where WordPress
 *    actually stores each piece.
 *
 * 4. oswp_hide_if_empty( $value ): returns the CSS class 'is-hidden'
 *    when a field value is empty, else ''. This is the mechanism
 *    behind single-event.php always rendering every field but
 *    visually hiding the blank ones.
 */

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


/**
 * oswp_page_start() / oswp_page_end()
 *
 * Reusable page wrapper for classic PHP templates in a block theme.
 * Handles the full <head>/<body>/header/footer scaffolding that
 * get_header()/get_footer() would normally provide in a classic
 * theme -- Twenty Twenty-Five has no header.php/footer.php, so those
 * functions silently fall back to an old built-in WordPress
 * compatibility template instead. This pair replaces that pattern:
 * call oswp_page_start() at the top of a page, put your content in
 * the middle (inside wrap-open/wrap-close if using that pattern too),
 * and call oswp_page_end() at the bottom.
 *
 * Both header and footer are rendered into buffers (ob_start /
 * ob_get_clean) BEFORE wp_head() runs -- even though the footer
 * buffer isn't printed until oswp_page_end(). This is required
 * because WordPress generates some block layout CSS dynamically, at
 * the moment each block actually renders. If a block renders after
 * wp_head() has already printed <head>, its CSS is generated too
 * late to make it into the page. Rendering (not printing) both
 * header and footer before wp_head() ensures all CSS is queued and
 * ready, regardless of where each buffer is echoed later.
 */
function oswp_page_start() {
	ob_start();
	echo '<div class="wp-site-blocks"><header class="wp-block-template-part">';
	block_template_part( 'header' );
	echo '</header>';
	$GLOBALS['oswp_header_html'] = ob_get_clean();

	ob_start();
	echo '<footer class="wp-block-template-part">';
	block_template_part( 'footer' );
	echo '</footer></div>';
	$GLOBALS['oswp_footer_html'] = ob_get_clean();
	?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	echo $GLOBALS['oswp_header_html'];
}

function oswp_page_end() {
	echo $GLOBALS['oswp_footer_html'];
	wp_footer();
	?>
</body>
</html>
	<?php
}
