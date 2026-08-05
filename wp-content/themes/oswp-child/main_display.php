<?php
/**
 * Template: main_display.php
 *
 * Conditional event template. GUI input rules:
 *   - featured_image: optional, single image, no count constraint
 *   - main_tile_image: optional, but MUST be exactly 2, else the
 *     whole section is skipped (not rendered at all — silent, no
 *     error shown)
 *   - small_tile_image: optional, but MUST be exactly 3, else same
 *     silent skip
 *
 * Vertical order: h1 -> tagline -> featured_image -> main_tile_image
 * (2, 6u each) -> small_tile_image (3, 4u each) -> two-column (LH
 * event_summary / RH event_details, always renders).
 *
 * NOW WIRED TO REAL ACF FIELDS AND WP CORE — pulls from the current
 * post via get_field()/has_post_thumbnail()/get_the_terms(). No
 * hardcoded test data remains.
 *
 * Forty's unit numbers are N/12 of the row (12u=100%, 6u=50%,
 * 4u=33.33%, 3u=25%) — NOT "how many fit per row." Mobile cascade
 * matches the rest of the site: one breakpoint (12u$(small)),
 * full-width stacked below that.
 */

// ---------------------------------------------------------------
// REAL DATA — pulled from ACF fields and WP core on the current
// post, replacing the earlier hardcoded test arrays.
// ---------------------------------------------------------------

$featured_image = get_field( 'featured_image' );
$has_featured_photo = (bool) $featured_image;
$featured_photo_caption = $has_featured_photo ? ( $featured_image['caption'] ?: $featured_image['alt'] ) : '';
// Prefer the registered event-featured crop if available (ACF
// generates it automatically since the size is registered in
// functions.php); fall back to the full-size original otherwise.
$featured_photo_src = $has_featured_photo
	? ( $featured_image['sizes']['event-featured'] ?? $featured_image['url'] )
	: '';

$force_square = true;

// Big tiles — only included if the field actually has an image set.
$main_tile_image = array();
foreach ( array( 'big_tile_image_1', 'big_tile_image_2' ) as $field_name ) {
	$img = get_field( $field_name );
	if ( $img ) {
		$main_tile_image[] = array(
			'src'     => $img['url'],
			'caption' => $img['caption'] ?: $img['alt'],
		);
	}
}

// Small tiles — same pattern, three fields.
$small_tile_image = array();
foreach ( array( 'small_tile_image_1', 'small_tile_image_2', 'small_tile_image_3' ) as $field_name ) {
	$img = get_field( $field_name );
	if ( $img ) {
		$small_tile_image[] = array(
			'src'     => $img['url'],
			'caption' => $img['caption'] ?: $img['alt'],
		);
	}
}

// LH/RH content — event_summary already exists on the schema.
// event_details built from event_date/event_end (ACF) + venue
// (taxonomy term, not a field) — only included if actually set.
$event_summary = get_field( 'event_summary' );

$event_details = array();

$starts = get_field( 'event_date' );
if ( $starts ) {
	$event_details['Date'] = date( 'd/m/y', strtotime( $starts ) );
}

$ends = get_field( 'event_end' );
if ( $ends ) {
	$event_details['Ends'] = date( 'd/m/y', strtotime( $ends ) );
}

$venue_terms = get_the_terms( get_the_ID(), 'venue' );
if ( $venue_terms && ! is_wp_error( $venue_terms ) ) {
	$event_details['Place'] = $venue_terms[0]->name;
}

// Age restriction, doors open — plain text, only if present.
$age_restriction = get_field( 'age_restriction' );
if ( $age_restriction ) {
	$event_details['Age'] = $age_restriction;
}

$doors_open = get_field( 'doors_open' );
if ( $doors_open ) {
	$event_details['Doors Open'] = $doors_open;
}

// Attendance note — free text, only if present.
$attendance_note = get_field( 'attendance_note' );
if ( $attendance_note ) {
	$event_details['Note'] = $attendance_note;
}

// Recurrence — combined into one readable phrase, only if the event
// is actually marked recurring.
if ( get_field( 'is_recurring' ) ) {
	$frequency = get_field( 'recurrence_frequency' );
	$day       = get_field( 'recurrence_day' );
	$phrase    = 'Recurring';
	if ( $frequency ) {
		$parts = explode( ':', $frequency );
		$phrase .= ' ' . trim( end( $parts ) );
	}
	if ( $day ) {
		$phrase .= ', every ' . ucfirst( $day );
	}
	$event_details['Frequency'] = $phrase;
}

// Booking required, accessibility — only shown when true.
if ( get_field( 'booking_required' ) ) {
	$event_details['Booking'] = 'Required';
}
if ( get_field( 'is_accessible' ) ) {
	$event_details['Access'] = 'Accessible venue';
}

// Action links — ticket/booking/enquiry URLs. Rendered separately
// as buttons. PLACEHOLDER labels — to be replaced by the parked
// booking_requirements/CHECKOUT design (see CHECKOUT.md TODO).
$event_actions = array();
$ticket_link = get_field( 'ticket_link' );
if ( $ticket_link ) {
	$event_actions[] = array( 'url' => $ticket_link, 'label' => 'Book Now', 'special' => true );
}
$attendance_link = get_field( 'attendance_link' );
if ( $attendance_link ) {
	$event_actions[] = array( 'url' => $attendance_link, 'label' => 'RSVP', 'special' => false );
}
$group_enquiry_link = get_field( 'group_enquiry_link' );
if ( $group_enquiry_link ) {
	$event_actions[] = array( 'url' => $group_enquiry_link, 'label' => 'Group Enquiries', 'special' => false );
}

/**
 * Renders one row of tiles at a given Forty width class — but ONLY
 * if the supplied array has EXACTLY $required_count items.
 */
function oswp_render_tile_row( $tiles, $width_class, $force_square, $required_count ) {
	if ( count( $tiles ) !== $required_count ) {
		return;
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
			<h1><?php the_title(); ?></h1>
			<?php $tagline = get_field( 'tagline' ); ?>
			<?php if ( $tagline ) : ?>
			<p class="tagline"><?php echo esc_html( $tagline ); ?></p>
			<?php endif; ?>
		</header>

		<?php if ( $has_featured_photo ) : ?>
		<figure class="single-feature">
			<img src="<?php echo esc_url( $featured_photo_src ); ?>" alt="">
			<?php if ( $featured_photo_caption ) : ?>
			<figcaption><?php echo esc_html( $featured_photo_caption ); ?></figcaption>
			<?php endif; ?>
		</figure>
		<?php endif; ?>

		<?php
		oswp_render_tile_row( $main_tile_image, '6u', $force_square, 2 );
		oswp_render_tile_row( $small_tile_image, '4u', $force_square, 3 );
		?>

		<?php if ( $event_summary || ! empty( $event_details ) ) : ?>
		<div class="row">
			<?php if ( $event_summary ) : ?>
			<div class="6u 12u$(small)">
				<p><?php echo esc_html( $event_summary ); ?></p>
			</div>
			<?php endif; ?>
			<?php if ( ! empty( $event_details ) ) : ?>
			<div class="6u$ 12u$(small)">
				<ul class="alt">
					<?php foreach ( $event_details as $label => $value ) : ?>
					<li><strong><?php echo esc_html( $label ); ?>:</strong> <?php echo esc_html( $value ); ?></li>
					<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>

		<?php if ( ! empty( $event_actions ) ) : ?>
		<ul class="actions">
			<?php foreach ( $event_actions as $action ) : ?>
			<li><a href="<?php echo esc_url( $action['url'] ); ?>" class="button<?php echo $action['special'] ? ' special' : ''; ?>"><?php echo esc_html( $action['label'] ); ?></a></li>
			<?php endforeach; ?>
		</ul>
		<?php endif; ?>

	</div>
</section>
<?php oswp_forty_end(); ?>
