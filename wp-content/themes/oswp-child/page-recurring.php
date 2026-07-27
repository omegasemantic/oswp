<?php
/**
 * Template: page-recurring.php
 * Timetable/schedule listing -- every recurring event, no date filter.
 * Title links through to the event's own single-event page.
 */
get_header();

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
?>

<main>
  <div class="event-content-wrap">
    <h1>Regular Events</h1>

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
      <section class="event-recurring-item">
        <h2 class="field-title">
          <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( $record['title'] ); ?></a>
        </h2>
<p class="field-event_summary"><?php echo esc_html( $record['event_summary'] ?? '' ); ?></p>
        <p class="field-recurring-summary">
          Running <?php echo esc_html( $starts ); ?> until <?php echo esc_html( $ends ); ?>.
          <?php echo esc_html( $frequency_label ); ?> on <?php echo esc_html( $day ); ?>.<?php echo esc_html( $time_str ); ?>
        </p>
      </section>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

  </div>
</main>

<?php get_footer(); ?>
