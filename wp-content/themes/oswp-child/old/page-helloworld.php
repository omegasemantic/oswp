<?php
/**
 * Template: page-helloworld.php
 * Playground page — experiment freely here.
 */
oswp_page_start();
?>
<?php get_template_part( 'template-parts/wrap-open' ); ?>
<div class="event-content-wrap">
  <h1>Hello, the world!</h1>
  <p>The time is: <?php echo date('g:i:s a'); ?></p>
</div>
<?php get_template_part( 'template-parts/wrap-close' ); ?>
<?php oswp_page_end(); ?>
