<?php
/**
 * Template: page-movies.php
 *
 * "Upcoming Screenings" listing — queries Screening posts (not Movie
 * posts directly), chronological, future-only. Each Screening links
 * to its parent Movie's own page (movie_display.php) via the
 * 'movie' Post Object field.
 *
 * Filtering/sorting done in PHP, not via meta_query: Screening's
 * date_and_time is stored in ACF's 'd/m/Y g:i a' format (day-first),
 * which is not string-sortable — a SQL-level meta_query comparison
 * against this format would silently misorder/misfilter. Fetching
 * all Screenings and filtering with DateTime::createFromFormat() is
 * correct and fine at this site's scale.
 *
 * Movie's own (now-unused) date_and_time field is no longer read
 * here — Screening is the single source of truth for scheduling.
 */

$screenings_query = new WP_Query([
        'post_type'      => 'screening',
        'posts_per_page' => -1,
]);

$now = current_time( 'timestamp' );
$upcoming = [];

while ( $screenings_query->have_posts() ): $screenings_query->the_post();
        $raw_date = get_field( 'date_and_time' );
        $movie    = get_field( 'movie' );

        if ( ! $raw_date || ! $movie ) {
                continue;
        }

        $dt = DateTime::createFromFormat( 'd/m/Y g:i a', $raw_date );
        if ( ! $dt || $dt->getTimestamp() < $now ) {
                continue;
        }

        $upcoming[] = [
                'timestamp' => $dt->getTimestamp(),
                'display'   => $dt->format( 'j F Y, g:ia' ),
                'movie'     => $movie,
        ];
endwhile;
wp_reset_postdata();

usort( $upcoming, function( $a, $b ) {
        return $a['timestamp'] <=> $b['timestamp'];
} );

oswp_forty_start();
?>
<section id="one">
        <div class="inner">
                <header class="major">
                        <h1>Upcoming Screenings</h1>
                </header>

                <?php foreach ( $upcoming as $item ): ?>
                        <?php
                        $movie    = $item['movie'];
                        $director = get_field( 'director', $movie->ID );
                        $image    = get_field( 'movie_image', $movie->ID );
                        ?>
                        <a class="clickable-row box event-row<?php echo $image ? ' has-avatar' : ''; ?>" href="<?php echo esc_url( get_permalink( $movie->ID ) ); ?>">
                                <div class="event-row-text">
                                        <p class="screening-time"><?php echo esc_html( $item['display'] ); ?></p>
                                        <h3><?php echo esc_html( get_the_title( $movie->ID ) ); ?></h3>
                                        <?php if ( $director ) : ?>
                                        <p class="tagline">Directed by <?php echo esc_html( $director ); ?></p>
                                        <?php endif; ?>
                                </div>
                                <?php if ( $image ) : ?>
                                <div class="event-row-avatar">
                                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                                </div>
                                <?php endif; ?>
                        </a>
                <?php endforeach; ?>

        </div>
</section>
<?php oswp_forty_end(); ?>
