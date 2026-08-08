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
 *
 * 5. oswp_page_start()/oswp_page_end(): Twenty Twenty-Five shell
 *    wrapper (block-theme header/footer). Still used by pages not
 *    yet migrated to Forty.
 *
 * 6. oswp_forty_start()/oswp_forty_end(): Forty shell wrapper, for
 *    pages migrated to the new static-HTML shell. See handover notes.
 */
/**
 * ACF Local JSON — sync field group definitions to/from theme files.
 * Enables version-controlled, file-based schema editing.
 */

add_filter( 'acf/settings/save_json', function() {
	return get_stylesheet_directory() . '/acf-json';
} );
add_filter( 'acf/settings/load_json', function( $paths ) {
	$paths[] = get_stylesheet_directory() . '/acf-json';
	return $paths;
} );

add_action( 'wp_enqueue_scripts', function() {
	wp_enqueue_style(
		'site-custom',
		get_stylesheet_directory_uri() . '/assets/css/custom.css',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/css/custom.css' )
	);
}, 22 );


add_action( 'after_setup_theme', function() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'event-featured', 800, 450, true );  // 16:9 — existing
	add_image_size( 'oswp-square', 800, 800, true );      // 1:1
	add_image_size( 'oswp-landscape', 1067, 800, true );  // 4:3
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

/**
 * Register nav menu locations for the Forty shell.
 *
 * 'oswp-header': left unassigned in Appearance > Menus. wp_nav_menu()
 * then falls back to wp_page_menu(), which auto-lists all published
 * pages — no manual curation, matches current Page List behaviour.
 *
 * 'oswp-footer': a real menu, manually created and assigned via
 * Appearance > Menus. Curated by hand — not automatic.
 */
function oswp_register_menus() {
	register_nav_menus( array(
		'oswp-header' => __( 'Header (auto — do not assign a menu here)', 'oswp-child' ),
		'oswp-footer' => __( 'Footer (manual)', 'oswp-child' ),
	) );
}
add_action( 'after_setup_theme', 'oswp_register_menus' );

/**
 * oswp_forty_start() / oswp_forty_end()
 *
 * Forty shell equivalent of oswp_page_start()/oswp_page_end(), for
 * pages migrated to the new static-HTML Forty theme. Unlike Forty's
 * original Jekyll build, header/footer menus are dynamic (WordPress
 * nav menus), not hand-written per page.
 *
 * No buffer-before-wp_head() dance needed here (unlike the Twenty
 * Twenty-Five version) — Forty's header/footer are plain static
 * HTML, not block-rendered, so there's no dynamic block CSS to
 * coordinate. Call oswp_forty_start() at the top of a page, put
 * content inside <div id="main">, call oswp_forty_end() at the
 * bottom.
 */
function oswp_forty_start() {
	?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper">

<header id="header">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
		<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
		<strong><?php bloginfo( 'name' ); ?></strong>
	</a>
	<nav>
		<a href="#menu">Menu</a>
	</nav>

</header>


<nav id="menu">
	<?php oswp_forty_nav_menu( 'oswp-header' ); ?>
</nav>

<div id="main" class="alt">
<?php
}

function oswp_forty_end() {
	?>
</div><!-- #main -->

<footer id="footer">
	<div class="inner">
		<?php oswp_forty_nav_menu( 'oswp-footer' ); ?>
		<ul class="copyright">
			<li>&copy; <?php bloginfo( 'name' ); ?></li>
		</ul>
	</div>
</footer>

</div><!-- #wrapper -->
<?php wp_footer(); ?>
</body>
</html>
	<?php
}

/**
 * Renders a WP nav menu wrapped in <ul class="links"> to match
 * Forty's CSS. If no menu is assigned to the location (e.g.
 * oswp-header, left deliberately unassigned), falls back to an
 * auto-generated list of published pages in the same markup shape.
 */
function oswp_forty_nav_menu( $location ) {
	wp_nav_menu( array(
		'theme_location' => $location,
		'container'      => false,
		'items_wrap'     => '<ul class="links">%3$s</ul>',
		'fallback_cb'    => 'oswp_forty_page_menu_fallback',
	) );
}


/**
 * Enqueue Forty's main.css for pages using oswp_forty_start()/end().
 * Only loads assets copied into oswp-child/assets/ from Karamu —
 * see handover notes for asset source.
 */
add_action( 'wp_enqueue_scripts', function() {
	if ( ! file_exists( get_stylesheet_directory() . '/assets/css/main.css' ) ) {
		return;
	}
	wp_enqueue_style(
		'forty-main',
		get_stylesheet_directory_uri() . '/assets/css/main.css',
		array(),
		filemtime( get_stylesheet_directory() . '/assets/css/main.css' )
	);
}, 21 );

/**
 * Enqueue Forty's JS (jQuery + skel + scrolly + util + main.js) for
 * pages using oswp_forty_start()/end(). Drives the menu toggle and,
 * on the billboard homepage, the tile background-image mechanism.
 * skel and scrolly must load before main.js, which calls both
 * directly on document ready. scrollex deliberately left out —
 * confirmed unused on simple content pages; add only if a console
 * error names it specifically.
 */
add_action( 'wp_enqueue_scripts', function() {
	$js_dir = get_stylesheet_directory() . '/assets/js/';
	$js_uri = get_stylesheet_directory_uri() . '/assets/js/';

	if ( ! file_exists( $js_dir . 'main.js' ) ) {
		return;
	}

	wp_enqueue_script( 'jquery' );

	wp_enqueue_script(
		'forty-skel',
		$js_uri . 'skel.min.js',
		array( 'jquery' ),
		filemtime( $js_dir . 'skel.min.js' ),
		true
	);

	wp_enqueue_script(
		'forty-scrolly',
		$js_uri . 'jquery.scrolly.min.js',
		array( 'jquery' ),
		filemtime( $js_dir . 'jquery.scrolly.min.js' ),
		true
	);

	wp_enqueue_script(
		'forty-util',
		$js_uri . 'util.js',
		array( 'jquery', 'forty-skel', 'forty-scrolly' ),
		filemtime( $js_dir . 'util.js' ),
		true
	);

	wp_enqueue_script(
		'forty-main',
		$js_uri . 'main.js',
		array( 'jquery', 'forty-skel', 'forty-scrolly', 'forty-util' ),
		filemtime( $js_dir . 'main.js' ),
		true
	);
}, 21 );

/**
 * Force the 'event' post type to render through main_display.php.
 * Explicit by design — main_display.php is a general-purpose rich
 * content template, not tied to WordPress's single-{posttype}.php
 * naming convention, so it can serve additional post types later
 * by adding them to the is_singular() check below.
 */
add_filter( 'single_template', function( $template ) {
	if ( is_singular( 'event' ) ) {
		$custom = get_stylesheet_directory() . '/main_display.php';
		if ( file_exists( $custom ) ) {
			return $custom;
		}
	}
	return $template;
} );

/**
 * Zero WYSIWYG for events — content is entered entirely via the ACF
 * Event Details panel, not the block editor. Confirmed team decision.
 * Scoped to 'event' only; pages keep their normal editor.
 */
add_action( 'init', function() {
	remove_post_type_support( 'event', 'editor' );
} );

/**
 * Force the 'movie' post type to render through movie_display.php.
 * Same pattern as the 'event' filter above.
 */
add_filter( 'single_template', function( $template ) {
        if ( is_singular( 'movie' ) ) {
                $custom = get_stylesheet_directory() . '/movie_display.php';
                if ( file_exists( $custom ) ) {
                        return $custom;
                }
        }
        return $template;
} );


/**
 * Zero WYSIWYG for movies — same rationale as events: content is
 * entered entirely via the ACF Movie Details panel, not the block
 * editor.
 */
add_action( 'init', function() {
        remove_post_type_support( 'movie', 'editor' );
} );

/**
 * Zero WYSIWYG for screenings — same rationale as events/movies:
 * content is entered entirely via the ACF Screening Details panel,
 * not the block editor.
 */
add_action( 'init', function() {
        remove_post_type_support( 'screening', 'editor' );
} );
/**
 * Hide unused default admin menu items — this site doesn't use the
 * built-in 'post' type (Events/Movies/Screenings/Pages cover
 * everything) or Comments.
 */
add_action( 'admin_menu', function() {
        remove_menu_page( 'edit.php' );          // Posts
        remove_menu_page( 'edit-comments.php' ); // Comments
        remove_menu_page( 'tools.php' ); // Comments
} );


/**
 * Use the classic (non-block) editor for Pages only — plain
 * WYSIWYG textarea, no block inserter. Doesn't require installing
 * the Classic Editor plugin; WP core still ships the classic
 * edit screen as a fallback when the block editor is disabled
 * for a given post type.
 */
add_filter( 'use_block_editor_for_post_type', function( $use_block_editor, $post_type ) {
        if ( $post_type === 'page' ) {
                return false;
        }
        return $use_block_editor;
}, 10, 2 );

function oswp_forty_page_menu_fallback() {
	echo '<ul class="links">';
            wp_list_pages( array(
                'title_li'    => '',
                'sort_column' => 'menu_order',
                'exclude'     => '310,307,322,313,316,294,287', // footer-only page IDs
            ) );
	echo '</ul>';
}
