<?php
/**
 * Template: page-next7days.php
 * Events in the next 7 days, live-queried, fully resolved.
 */
get_header();
$today    = current_time('Y-m-d');
$week_out = date('Y-m-d', strtotime(current_time('Y-m-d') . ' +7 days'));
$events = new WP_Query([
    'post_type'      => 'event',
    'posts_per_page' => -1,
    'meta_key'       => 'event_date',
    'orderby'        => 'meta_value',
    'meta_query'     => [
        'relation' => 'AND',
        [
            'key'     => 'event_date',
            'value'   => [ $today, $week_out ],
            'compare' => 'BETWEEN',
            'type'    => 'DATE',
        ],
        [
            'key'     => 'is_recurring',
            'value'   => '1',
            'compare' => '!=',
        ],
    ],
    'order'          => 'ASC',
]);
?>
<?php get_template_part( 'template-parts/wrap-open' ); ?>
<div class="event-content-wrap">
<pre>
<?php
while ( $events->have_posts() ): $events->the_post();
    $record = oswp_get_event_record( get_the_ID() );
    echo json_encode( $record, JSON_PRETTY_PRINT );
    echo "\n\n";
endwhile;
wp_reset_postdata();
?>
</pre>
</div>
<?php get_template_part( 'template-parts/wrap-close' ); ?>
<?php get_footer(); ?>
