<?php
/**
 * Template: page-recurring.php
 * Timetable/schedule listing -- every recurring event, no date filter.
 * Title links through to the event's own single-event page
 * (main_display.php, via the single_template filter in functions.php).
 *
 * Migrated to Forty shell (was calling get_header()/get_footer()
 * directly — Twenty Twenty-Five has no header.php/footer.php of its
 * own, so this was silently falling back to WordPress's built-in
 * compatibility template, not even the old oswp_page_start() shell).
 * Query logic and oswp_get_event_record() usage unchanged — only the
 * shell/markup changed.
 *
 * avatar: new optional ACF field (Image), fixed-size square shown
 * on the RH side of each listing row when present. Kept deliberately
 * separate from main_display.php's tile/featured-image logic.
 */
function oswp_short_date( $raw ) {
	if ( empty( $raw ) ) {
		return '';
	}
	$dt = DateTime::createFromFormat( 'd/m/Y g:i a', $raw );
	return $dt ? $dt->format( 'd/m/y' ) : $raw;
}

$events = new WP_Query([
	'post_type'      => 'event',
	'posts_per_page' => -1,
]);

oswp_forty_start();
?>
<section id="one">
	<div class="inner">
		<header class="major">
			<h1>Regular Events</h1>
		</header>

		<?php while ( $events->have_posts() ): $events->the_post(); ?>
			<?php
			$record = oswp_get_event_record( get_the_ID() );
			if ( empty( $record['is_recurring'] ) ) {
				continue;
			}
			$starts    = oswp_short_date( $record['event_date'] ?? '' );
			$ends      = ! empty( $record['event_end'] ) ? oswp_short_date( $record['event_end'] ) : 'ongoing';
			$frequency = $record['recurrence_frequency'] ?? '';
			$day       = ucfirst( $record['recurrence_day'] ?? '' );
			$time      = $record['entry_time'] ?? '';
			$frequency_label = strpos( $frequency, ':' ) !== false
				? trim( substr( $frequency, strpos( $frequency, ':' ) + 1 ) )
				: $frequency;
			$time_str = $time ? " Doors open {$time}." : '';
			?>
			<?php $avatar = get_field( 'avatar' ); ?>
			<div class="box event-row<?php echo $avatar ? ' has-avatar' : ''; ?>">
				<div class="event-row-text">
					<h3>
						<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( $record['title'] ); ?></a>
					</h3>
					<?php if ( ! empty( $record['tagline'] ) ) : ?>
					<p class="tagline"><?php echo esc_html( $record['tagline'] ); ?></p>
					<?php endif; ?>
					<p>
						Running <?php echo esc_html( $starts ); ?> until <?php echo esc_html( $ends ); ?>.
						<?php echo esc_html( $frequency_label ); ?> on <?php echo esc_html( $day ); ?>.<?php echo esc_html( $time_str ); ?>
					</p>
				</div>
				<?php if ( $avatar ) : ?>
				<div class="event-row-avatar">
					<img src="<?php echo esc_url( $avatar['url'] ); ?>" alt="<?php echo esc_attr( $avatar['alt'] ); ?>">
				</div>
				<?php endif; ?>
			</div>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>

	</div>
</section>
<?php oswp_forty_end(); ?>
