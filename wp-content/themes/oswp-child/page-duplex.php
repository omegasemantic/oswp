<?php
/**
 * Template: page-duplex.php
 *
 * Conditional event template. GUI input rules:
 *   - featured_image: optional, single image, no count constraint
 *   - main_tile_image: optional, but MUST be exactly 2, else the
 *     whole section is skipped (not rendered at all — silent, no
 *     error shown)
 *   - small_tile_image: optional, but MUST be exactly 3, else same
 *     silent skip
 *
 * Vertical order: h1 -> featured_image -> main_tile_image (2, 6u
 * each) -> small_tile_image (3, 4u each) -> two-column (LH
 * event_summary / RH event_details, always renders).
 *
 * NOT YET WIRED TO ACF — this file currently uses hardcoded test
 * data standing in for what will eventually be real ACF fields.
 *
 * Forty's unit numbers are N/12 of the row (12u=100%, 6u=50%,
 * 4u=33.33%, 3u=25%) — NOT "how many fit per row." Mobile cascade
 * matches the rest of the site: one breakpoint (12u$(small)),
 * full-width stacked below that.
 */

// ---------------------------------------------------------------
// TEST DATA — stand-in for future ACF fields. Edit here to test
// different states; nothing below this block needs to change.
//
// To test the "fail" case (wrong count silently skips the
// section): add or remove an item from $main_tile_image or
// $small_tile_image so the count no longer matches 2 or 3.
// ---------------------------------------------------------------

// Toggle: set to false to test the "no featured photo" case.
$has_featured_photo = true;
$featured_photo_src = get_stylesheet_directory_uri() . '/assets/images/pic01.jpg';
$featured_photo_caption = 'Featured photo caption — this whole figure is skipped if no featured image exists.';

$force_square = true;

$main_tile_image = array( // must be exactly 2, else section is skipped
	array( 'src' => get_stylesheet_directory_uri() . '/assets/images/pic05.jpg', 'caption' => 'Main tile one' ),
	array( 'src' => get_stylesheet_directory_uri() . '/assets/images/pic06.jpg', 'caption' => 'Main tile two' ),
);
$small_tile_image = array( // must be exactly 3, else section is skipped
	array( 'src' => get_stylesheet_directory_uri() . '/assets/images/pic07.jpg', 'caption' => 'Small tile one' ),
	array( 'src' => get_stylesheet_directory_uri() . '/assets/images/pic08.jpg', 'caption' => 'Small tile two' ),
	array( 'src' => get_stylesheet_directory_uri() . '/assets/images/pic09.jpg', 'caption' => 'Small tile three' ),
);

// LH/RH content — always renders, not conditional (every event is
// assumed to have at least a summary + details).
$event_summary = 'The Raglan Artist Collective meets often to discuss a way forward for local art.';
$event_details = array(
	'Date'  => '14/08/26',
	'Time'  => '7.30 pm',
	'Place' => 'Common Room',
);

/**
 * Renders one row of tiles at a given Forty width class — but ONLY
 * if the supplied array has EXACTLY $required_count items. Any
 * other count (including 0, which is also just "not supplied") is
 * silently skipped — nothing renders, no error shown to visitors.
 * This enforces the GUI rule: main_tile_image must be exactly 2,
 * small_tile_image must be exactly 3, or the section doesn't show.
 *
 * If $force_square is true, each image gets a CSS class that forces
 * square display via object-fit: cover (visual crop only, browser-
 * side — not a real server-side crop; see TODO re: wiring the real
 * oswp-square crop pipeline once ACF is connected).
 */
function oswp_render_tile_row( $tiles, $width_class, $force_square, $required_count ) {
	if ( count( $tiles ) !== $required_count ) {
		return; // wrong count — fail silently, section just doesn't render
	}
	$count = count( $tiles );
	$img_class = $force_square ? 'force-square' : '';
	?>
	<div class="row">
		<?php foreach ( $tiles as $i => $tile ) :
			$is_last = ( $i === $count - 1 );
			$col_class = $width_class . ( $is_last ? '$' : '' ) . ' 12u$(small)';
		?>
		<div class="<?php echo esc_attr( $col_class ); ?>">
			<figure class="single-feature">
				<img class="<?php echo esc_attr( $img_class ); ?>" src="<?php echo esc_url( $tile['src'] ); ?>" alt="">
				<figcaption><?php echo esc_html( $tile['caption'] ); ?></figcaption>
			</figure>
		</div>
		<?php endforeach; ?>
	</div>
	<?php
}

oswp_forty_start();
?>
<section id="one">
	<div class="inner">

		<header class="major">
			<h1>Duplex</h1>
		</header>

		<?php
		// -------------------------------------------------------
		// FEATURED PHOTO — comment out this whole if-block (or set
		// $has_featured_photo = false above) to test the "no
		// featured photo" case.
		// -------------------------------------------------------
		if ( $has_featured_photo ) :
		?>
		<figure class="single-feature">
			<img src="<?php echo esc_url( $featured_photo_src ); ?>" alt="">
			<figcaption><?php echo esc_html( $featured_photo_caption ); ?></figcaption>
		</figure>
		<?php endif; ?>

		<?php
		// -------------------------------------------------------
		// MAIN TILES — renders only if exactly 2 supplied.
		// 6u each (50%).
		// -------------------------------------------------------
		oswp_render_tile_row( $main_tile_image, '6u', $force_square, 2 );

		// -------------------------------------------------------
		// SMALL TILES — renders only if exactly 3 supplied.
		// 4u each (33.33% — 3 x 4u = 100%).
		// -------------------------------------------------------
		oswp_render_tile_row( $small_tile_image, '4u', $force_square, 3 );
		?>

		<?php
		// -------------------------------------------------------
		// LH/RH BLOCK — same shape as page-duo.php. Currently
		// always renders (not conditional) per the discussion:
		// every event is assumed to have at least this much.
		// -------------------------------------------------------
		?>
		<div class="row">
			<div class="6u 12u$(small)">
				<p><?php echo esc_html( $event_summary ); ?></p>
			</div>
			<div class="6u$ 12u$(small)">
				<ul class="alt">
					<?php foreach ( $event_details as $label => $value ) : ?>
					<li><strong><?php echo esc_html( $label ); ?>:</strong> <?php echo esc_html( $value ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

	</div>
</section>
<?php oswp_forty_end(); ?>
