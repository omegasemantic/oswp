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
			<h1>dream : connect : create</h1>
		</header>
		<div class="content">
			<p style="text-transform: uppercase;"></p>
			<ul class="actions">
				<li><a href="#one" class="button next scrolly">Get Started</a></li>
			</ul>
		</div>
	</div>
</section>

<section id="one" class="tiles">
	<?php
	$tiles = array(
		array( 'title' => 'immerse',  'image' => 'wearart2.jpg',        'url' => '/ipsum/', 'desc' => 'in our passion for performance' ),
		array( 'title' => 'develop',   'image' => 'visual.jpg',      'url' => '/ipsum/', 'desc' => 'the future of our visual art' ),
		array( 'title' => 'embrace',  'image' => 'Book-Club.jpg',    'url' => '/ipsum/', 'desc' => 'our stories through reading and writing' ),
		array( 'title' => 'discover', 'image' => 'pottery.jpg',   'url' => '/ipsum/', 'desc' => 'art education for all' ),
		array( 'title' => 'focus','image' => 'film.jpg',  'url' => '/ipsum/', 'desc' => 'on our films & film makers' ),
		array( 'title' => 'engage',  'image' => 'stage.jpg',      'url' => '/ipsum/', 'desc' => 'and tautoko our community' ),
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
