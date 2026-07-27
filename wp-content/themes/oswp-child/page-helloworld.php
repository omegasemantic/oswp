<?php
/**
 * Template: page-helloworld.php
 * Playground page — experiment freely here.
 */
get_header();
?>

<div class="wp-block-group is-layout-constrained">
  <div class="entry-content wp-block-post-content is-layout-flow">
    <main>
      <h1>Hello, the world!</h1>
      <p>The time is: <?php echo date('g:i:s a'); ?></p>
    </main>
  </div>
</div>

<?php get_footer(); ?>
