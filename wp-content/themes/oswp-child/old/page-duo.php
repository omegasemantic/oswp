<?php
/**
 * Template: page-duo.php
 * Forty shell page — event-style layout test: feature image, then a
 * two-column row (LH: short description, RH: scannable detail list
 * via Forty's own ul.alt component). Stacks full-width on small
 * screens automatically via the 12u$(small) breakpoint class.
 */
oswp_forty_start();
?>
<section id="one">
	<div class="inner">
		<header class="major">
			<h1>The Art Collective</h1>
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
				     is set via wp-admin. -->
				<img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/assets/images/pic03.jpg' ); ?>" alt="Test image" width="1067" height="800">
				<figcaption>Temporary test caption — remove with the image above.</figcaption>
			<?php endif; ?>
		</figure>

		<div class="row">
			<div class="6u 12u$(small)">
                                                <p>The Raglan Artist Collective meets often to discuss a way forward for local art.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam blandit fringilla turpis vitae malesuada. 

Nullam mollis nec lacus at interdum. Quisque sed quam a nulla interdum varius at nec arcu. Donec sed magna maximus, tincidunt dui non, lacinia augue. Ut in pretium nisl. Donec sit amet purus ac ipsum tristique ornare. </p>
			</div>
			<div class="6u$ 12u$(small)">
				<ul class="alt">
					<li><strong>Date:</strong> 14/08/26</li>
					<li><strong>Time:</strong> 7.30 pm</li>
					<li><strong>Place:</strong> Common Room</li>
				</ul>
			</div>
		</div>

	</div>
</section>
<?php oswp_forty_end(); ?>
