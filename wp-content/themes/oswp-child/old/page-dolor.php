<?php
/**
 * Template: page-dolor.php
 * Forty shell page — same shape as page-ipsum.php, but using the
 * oswp-landscape (4:3) feature image size instead of event-featured
 * (16:9).
 */
oswp_forty_start();
?>
<section id="one">
	<div class="inner">
		<header class="major">
			<h1>Dolor</h1>
		</header>

		<figure class="single-feature">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'oswp-landscape' ); ?>
				<?php
				$caption = wp_get_attachment_caption( get_post_thumbnail_id() );
				if ( $caption ) :
				?>
				<figcaption><?php echo esc_html( $caption ); ?></figcaption>
				<?php endif; ?>
			<?php else : ?>
				<!-- TEMP TEST IMAGE — remove once a real featured image
				     is set via wp-admin, or once this page moves to the
				     GUI/ACF authoring flow. -->
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pic02.jpg' ); ?>" alt="Test image" width="1067" height="800">
				<figcaption>Temporary test caption — remove with the image above.</figcaption>
			<?php endif; ?>
		</figure>

		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. This page proves the oswp-landscape (4:3) feature image size renders correctly, using the same shell and structure as page-ipsum.php.</p>
	</div>
</section>
<?php oswp_forty_end(); ?>
