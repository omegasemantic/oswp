<?php
/**
 * Template: page.php
 *
 * Generic fallback for any plain WP Page that doesn't have its own
 * dedicated page-{slug}.php (e.g. About, Contact). Free-form content
 * via the block editor — the_content() — unlike Event/Movie/Screening,
 * which use structured ACF fields instead of the WYSIWYG editor.
 */
oswp_forty_start();
?>
<section id="one">
        <div class="inner">
                <header class="major">
                        <h1><?php the_title(); ?></h1>
                </header>

                <?php while ( have_posts() ): the_post(); ?>
                        <?php if ( has_post_thumbnail() ) : ?>
                        <?php $caption = wp_get_attachment_caption( get_post_thumbnail_id() ); ?>
                        <figure class="single-feature">
                                <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto;' ) ); ?>
                                <?php if ( $caption ) : ?>
                                <figcaption><?php echo esc_html( $caption ); ?></figcaption>
                                <?php endif; ?>
                        </figure>
                        <?php endif; ?>
                        <?php the_content(); ?>
                <?php endwhile; ?>

        </div>
</section>
<?php oswp_forty_end(); ?>
