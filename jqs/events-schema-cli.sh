#!/usr/bin/env bash
#
# events-schema-cli.sh
#
# Prints the FULL event record (postmeta fields + taxonomy terms) as
# JSON straight to the terminal -- same combined view as the PHP page,
# but via `wp eval` so no page/browser is needed. Direct jq-style dump.
#
# Usage: run from ~/oswp
#   bash events-schema-cli.sh
#   bash events-schema-cli.sh | jq .          # pipe into jq if you want
#
set -euo pipefail

CONTAINER="oswp-wordpress-1"

docker exec -i "$CONTAINER" wp eval '
$events = new WP_Query([
    "post_type"      => "event",
    "posts_per_page" => -1,
    "post_status"    => [ "publish", "draft" ],
]);

$output = [];

while ( $events->have_posts() ): $events->the_post();
    $record = oswp_get_event_record( get_the_ID() );
    $record["post_status"] = get_post_status();
    $record["slug"] = get_post_field( "post_name", get_the_ID() );
    $record["permalink"] = get_permalink();
    $record["featured_image"] = has_post_thumbnail()
        ? get_the_post_thumbnail_url( get_the_ID(), "event-featured" )
        : null;
    $output[] = $record;
endwhile;
wp_reset_postdata();

echo json_encode( $output, JSON_PRETTY_PRINT );
' --allow-root
