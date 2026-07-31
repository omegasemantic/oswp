<?php
/**
 * Template: page-billboard.php
 * Test page for the Forty tile/billboard homepage mechanism.
 * Tile content is placeholder (Karamu's original six, all linking
 * to /ipsum/) — real tile targets not yet decided.
 */
oswp_forty_start();
?>
<section id="banner" class="major">
	<div class="inner">
		<header class="major">
			<h1>Raglan Old School Arts Centre</h1>
		</header>
		<div class="content">
			<p style="text-transform: uppercase;">Placeholder tagline — to be decided</p>
			<ul class="actions">
				<li><a href="#one" class="button next scrolly">Get Started</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="one" class="tiles">
	<?php
	$tiles = array(
		array( 'title' => 'Commune',  'image' => 'tui.JPG',        'url' => '/ipsum/', 'desc' => 'Lorem ipsum dolor est' ),
		array( 'title' => 'Create',   'image' => 'pic11.jpg',      'url' => '/ipsum/', 'desc' => 'Lorem ipsum dolor est' ),
		array( 'title' => 'Immerse',  'image' => 'surfdog.jpg',    'url' => '/ipsum/', 'desc' => 'Lorem ipsum dolor est' ),
		array( 'title' => 'Discover', 'image' => 'Learning.jpg',   'url' => '/ipsum/', 'desc' => 'Lorem ipsum dolor est' ),
		array( 'title' => 'Replenish','image' => 'replenish.jpg',  'url' => '/ipsum/', 'desc' => 'Lorem ipsum dolor est' ),
		array( 'title' => 'Retreat',  'image' => 'creek.jpg',      'url' => '/ipsum/', 'desc' => 'Lorem ipsum dolor est' ),
	);
	foreach ( $tiles as $tile ) :
		$img_url = get_stylesheet_directory_uri() . '/assets/images/' . $tile['image'];
		?>
	<article>
		<span class="image">
			<img src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_attr( $tile['title'] ); ?>">
		</span>
		<header class="major">
			<h3><a href="<?php echo esc_url( $tile['url'] ); ?>" class="link"><?php echo esc_html( $tile['title'] ); ?></a></h3>
			<p><?php echo esc_html( $tile['desc'] ); ?></p>
		</header>
	</article>
	<?php endforeach; ?>
</section>

<section id="two">
	<div class="inner">
		<header class="major">
			<h2>Massa libero</h2>
		</header>
		<p>Placeholder text section — to be decided.</p>
	</div>
</section>
<?php oswp_forty_end(); ?>
