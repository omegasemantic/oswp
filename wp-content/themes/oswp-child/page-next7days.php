<?php
/**
 * Template: page-next7days.php
 * Events in the next 7 days, live-queried, fully resolved.
 */
get_header();

$today    = date('Y-m-d');
$week_out = date('Y-m-d', strtotime('+7 days'));

$events = new WP_Query([
    'post_type'      => 'event',
    'posts_per_page' => -1,
    'meta_key'       => 'event_date',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'meta_query'     => [[
        'key'     => 'event_date',
        'value'   => [ $today, $week_out ],
        'compare' => 'BETWEEN',
        'type'    => 'DATE',
    ]],
]);
?>

<main>
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
</main>

<?php get_footer(); ?>
