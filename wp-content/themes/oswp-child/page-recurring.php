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
 *
 * Schedule string (2026-08): "{frequency} on {day}" optionally
 * followed by "until {end date}" if semester_ends is set — no
 * fallback "until ongoing" text. semester_starts deliberately not
 * shown here (avoids implying a weekly event "started" months ago;
 * a future/upcoming-events page is a separate parked task). End date
 * shown as "15 DEC 2026" (day, abbreviated uppercase month, year) via
 * oswp_long_date(), not the short d/m/y format used elsewhere.
 *
 * Whole-row-clickable (2026-08): entire row is now a single <a>
 * (class="clickable-row") rather than just the title text, matching
 * the pattern established on page-movies.php — larger, easier tap
 * target, particularly on mobile. .clickable-row is a generic,
 * reusable style in custom.css.
 */
function oswp_long_date( $raw ) {
        if ( empty( $raw ) ) {
                return '';
        }
        $dt = DateTime::createFromFormat( 'd/m/Y g:i a', $raw );
        if ( ! $dt ) {
                return $raw;
        }
        return $dt->format( 'j' ) . ' ' . strtoupper( $dt->format( 'M' ) ) . ' ' . $dt->format( 'Y' );
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
                        $frequency = $record['recurrence_frequency'] ?? '';
                        $day       = ucfirst( $record['recurrence_day'] ?? '' );
                        $time      = $record['entry_time'] ?? '';
                        $frequency_label = strpos( $frequency, ':' ) !== false
                                ? trim( substr( $frequency, strpos( $frequency, ':' ) + 1 ) )
                                : $frequency;

                        $schedule = trim( "{$frequency_label} on {$day}" );
                        if ( ! empty( $record['semester_ends'] ) ) {
                                $schedule .= ' until ' . oswp_long_date( $record['semester_ends'] );
                        }

                        $time_str = $time ? " Doors open {$time}." : '';
                        ?>
                        <?php $avatar = get_field( 'avatar' ); ?>
                        <a class="clickable-row box event-row<?php echo $avatar ? ' has-avatar' : ''; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                                <div class="event-row-text">
                                        <h3><?php echo esc_html( $record['title'] ); ?></h3>
                                        <?php if ( ! empty( $record['tagline'] ) ) : ?>
                                        <p class="tagline"><?php echo esc_html( $record['tagline'] ); ?></p>
                                        <?php endif; ?>
                                        <p>
                                                <?php echo esc_html( $schedule ); ?>.<?php echo esc_html( $time_str ); ?>
                                        </p>
                                </div>
                                <?php if ( $avatar ) : ?>
                                <div class="event-row-avatar">
                                        <img src="<?php echo esc_url( $avatar['url'] ); ?>" alt="<?php echo esc_attr( $avatar['alt'] ); ?>">
                                </div>
                                <?php endif; ?>
                        </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

        </div>
</section>
<?php oswp_forty_end(); ?>
