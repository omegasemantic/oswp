<?php
/**
 * single-event.php overview
 *
 * Full public event page. Always renders every field ("full noise"),
 * regardless of whether it has a value.
 *
 * $record = oswp_get_event_record( $post_id ) does the heavy lifting
 * (see functions.php) -- one call gets every ACF field plus all three
 * taxonomy relationships (venue, staff/coordinator, event_category)
 * as one flat array. $fields and $terms below are just that same
 * array split into two named variables for readability -- no extra
 * data fetching happens here.
 *
 * Every field/taxonomy wrapper follows the same pattern:
 *   class="field-x <?php echo oswp_hide_if_empty( $value ); ?>"
 * oswp_hide_if_empty() adds the CSS class 'is-hidden' when $value is
 * empty, so the row still renders in the HTML but is hidden visually
 * -- rather than being skipped in PHP with an if-statement. This is
 * why every field appears in the template even if most events leave
 * most fields blank.
 *
 * ?? '' / ?? false are PHP's null-coalescing operator: "use this
 * field's value if it's set, otherwise fall back to '' / false" --
 * guards against a PHP warning if a field is missing from the record
 * entirely (e.g. not yet filled in for that event).
 *
 * esc_html() / esc_url() escape output for safe display -- standard
 * WordPress practice, used on every field value before it's echoed.
 *
 * oswp_page_start()/oswp_page_end() (see functions.php) handle the
 * full page scaffolding -- <head>, wp_head(), the real Twenty
 * Twenty-Five header/footer, and wp_footer(). Every new PHP page
 * uses this same pair; this file no longer carries its own inline
 * copy of that logic.
 */
oswp_page_start();

$post_id = get_the_ID();
$record  = oswp_get_event_record( $post_id );
$fields  = $record; // plain fields + taxonomy terms, same array
$terms   = [
    'venue'          => $record['venue'],
    'staff'          => $record['staff'],
    'event_category' => $record['event_category'],
];

?>

<?php get_template_part( 'template-parts/wrap-open' ); ?>

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
<?php get_template_part( 'template-parts/wrap-close' ); ?>
<?php oswp_page_end(); ?>
