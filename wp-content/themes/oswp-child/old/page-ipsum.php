<?php
/**
 * Template: page-ipsum.php
 * Forty shell test page — proves oswp_forty_start()/end() renders
 * correctly before building the billboard homepage.
 */
oswp_forty_start();
?>
<section id="one">
	<div class="inner">
		<header class="major">
			<h1>Ipsum</h1>
		</header>

		<figure class="single-feature">
			<?php if ( has_post_thumbnail() ) : ?>
				<?php the_post_thumbnail( 'oswp-square' ); ?>
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
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pic01.jpg' ); ?>" alt="Test image" width="800" height="450">
				<figcaption>Temporary test caption — remove with the image above.</figcaption>
			<?php endif; ?>
		</figure>

		<p>I am Lorem ipsum dolor sit amet, consectetur adipiscing elit. This is a plain content page proving the Forty shell — header, menu, footer — renders correctly under WordPress before the billboard homepage is built.</p>
	</div>
</section>
<?php oswp_forty_end(); ?>
