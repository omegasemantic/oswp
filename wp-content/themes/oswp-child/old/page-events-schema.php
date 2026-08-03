<?php
/**
 * page-events-schema.php overview
 *
 * The raw debugging dump -- no filtering, no formatting, no CSS
 * classes. Queries every event including drafts (post_status includes
 * 'draft', not just 'publish'), runs each through
 * oswp_get_event_record(), and echoes the whole thing as pretty-
 * printed JSON inside a <pre> tag. This is the direct browser
 * equivalent of events-schema-cli.sh -- both call the same function,
 * just one via HTTP/browser and one via WP-CLI/terminal.
 */
/**
 * Template: page-events-schema.php
 * Full event record dump -- debugging reference. Shows drafts too.
 */
get_header();

$events = new WP_Query([
    'post_type'      => 'event',
    'posts_per_page' => -1,
    'post_status'    => [ 'publish', 'draft' ],
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
