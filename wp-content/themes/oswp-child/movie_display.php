<?php
/**
 * Template: movie_display.php
 *
 * Simple, appearance-first single-movie template — first pass.
 * Fields used (per Movies ACF field group, confirmed via
 * `wp post meta list` on a real movie post):
 *   - director        (text)
 *   - synopsis        (text/textarea)
 *   - date_and_time   (single ACF Date Time Picker field — unlike
 *                      events, movies do NOT split start/end;
 *                      one field only)
 *   - movie_image      (single Image field)
 *
 * Not yet wired to single_template routing (is_singular('movie'))
 * — appearance-only pass per instruction. Add that filter to
 * functions.php once the look is confirmed.
 */

$director   = get_field( 'director' );
$synopsis   = get_field( 'synopsis' );
$image      = get_field( 'movie_image' );

$screening_date = '';
if ( $raw_date ) {
        // ACF Date Time Picker default return format: 'Y-m-d H:i:s'
        $dt = DateTime::createFromFormat( 'Y-m-d H:i:s', $raw_date );
        $screening_date = $dt ? $dt->format( 'j F Y, g:ia' ) : $raw_date;
}

oswp_forty_start();
?>
<section id="one">
        <div class="inner">

                <header class="major">
                        <h1><?php the_title(); ?></h1>
                        <?php if ( $director ) : ?>
                        <p class="tagline">Directed by <?php echo esc_html( $director ); ?></p>
                        <?php endif; ?>
                </header>

                <?php if ( $image ) : ?>
                <figure class="single-feature">
                        <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
                </figure>
                <?php endif; ?>

                <?php if ( $screening_date ) : ?>
                <p><strong>Screening:</strong> <?php echo esc_html( $screening_date ); ?></p>
                <?php endif; ?>

                <?php if ( $synopsis ) : ?>
                <p><?php echo esc_html( $synopsis ); ?></p>
                <?php endif; ?>

        </div>
</section>
<?php oswp_forty_end(); ?>
