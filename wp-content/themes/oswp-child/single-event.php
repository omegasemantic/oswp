<?php
/**
 * Template: single-event.php
 * PHP always renders full noise -- every field, every time.
 * CSS (.is-hidden) decides what's actually visible.
 */
get_header();

$post_id = get_the_ID();
$record  = oswp_get_event_record( $post_id );
$fields  = $record; // plain fields + taxonomy terms, same array
$terms   = [
    'venue'          => $record['venue'],
    'staff'          => $record['staff'],
    'event_category' => $record['event_category'],
];

?>

<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
  <div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
    <div class="event-content-wrap">

      <h1><?php the_title(); ?></h1>

      <div class="event-featured-image <?php echo oswp_hide_if_empty( has_post_thumbnail( $post_id ) ); ?>">
        <?php echo get_the_post_thumbnail( $post_id, 'event-featured', [ 'style' => 'max-width:100%;height:auto;' ] ); ?>
      </div>

<div class="event-summary <?php echo oswp_hide_if_empty( $fields['event_summary'] ?? '' ); ?>">
    <?php echo esc_html( $fields['event_summary'] ?? '' ); ?>
</div>
      <section class="event-details">

        <p class="field-event_date <?php echo oswp_hide_if_empty( $fields['event_date'] ?? '' ); ?>">
          <strong>Date:</strong> <?php echo esc_html( $fields['event_date'] ?? '' ); ?>
        </p>

        <p class="field-event_end <?php echo oswp_hide_if_empty( $fields['event_end'] ?? '' ); ?>">
          <strong>Ends:</strong> <?php echo esc_html( $fields['event_end'] ?? '' ); ?>
        </p>

        <p class="field-venue <?php echo oswp_hide_if_empty( $terms['venue'] ); ?>">
          <strong>Venue:</strong> <?php echo esc_html( implode( ', ', $terms['venue'] ) ); ?>
        </p>

        <p class="field-staff <?php echo oswp_hide_if_empty( $terms['staff'] ); ?>">
          <strong>Coordinator:</strong> <?php echo esc_html( implode( ', ', $terms['staff'] ) ); ?>
        </p>

        <p class="field-event_category <?php echo oswp_hide_if_empty( $terms['event_category'] ); ?>">
          <strong>Category:</strong> <?php echo esc_html( implode( ', ', $terms['event_category'] ) ); ?>
        </p>

        <p class="field-attendance_type <?php echo oswp_hide_if_empty( $fields['attendance_type'] ?? '' ); ?>">
          <strong>Attendance:</strong> <?php echo esc_html( $fields['attendance_type'] ?? '' ); ?>
        </p>

        <p class="field-attendance_note <?php echo oswp_hide_if_empty( $fields['attendance_note'] ?? '' ); ?>">
          <?php echo esc_html( $fields['attendance_note'] ?? '' ); ?>
        </p>

        <p class="field-booking <?php echo oswp_hide_if_empty( $fields['booking_required'] ?? false ); ?>">
          <strong>Booking required.</strong>
          <a href="<?php echo esc_url( $fields['attendance_link'] ?? '' ); ?>">Book here</a>
        </p>

        <p class="field-ticket_link <?php echo oswp_hide_if_empty( $fields['ticket_link'] ?? '' ); ?>">
          <a href="<?php echo esc_url( $fields['ticket_link'] ?? '' ); ?>">Tickets</a>
        </p>

        <p class="field-group_enquiry_link <?php echo oswp_hide_if_empty( $fields['group_enquiry_link'] ?? '' ); ?>">
          <a href="<?php echo esc_url( $fields['group_enquiry_link'] ?? '' ); ?>">Group enquiries</a>
        </p>

        <p class="field-recurring <?php echo oswp_hide_if_empty( $fields['is_recurring'] ?? false ); ?>">
          <strong>Recurs:</strong> <?php echo esc_html( $fields['recurrence_frequency'] ?? '' ); ?>
          (<?php echo esc_html( ucfirst( $fields['recurrence_day'] ?? '' ) ); ?>s)
        </p>

      </section>

    </div>
  </div>
</main>

<?php get_footer(); ?>
