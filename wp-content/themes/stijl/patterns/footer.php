<?php
/**
 * Title: footer
 * Slug: stijl/footer
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"patternName":"stijl/footer","name":"footer"},"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-pattern-line-scaled.png","dimRatio":0,"customOverlayColor":"#b8a9ae","isUserOverlayColor":false,"focalPoint":{"x":0,"y":0},"minHeight":205,"isDark":false,"sizeSlug":"full","metadata":{"name":"Patterns"},"align":"wide","style":{"border":{"top":{"width":"5px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light" style="border-top-width:5px;min-height:205px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-pattern-line-scaled.png" style="object-position:0% 0%" data-object-fit="cover" data-object-position="0% 0%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b8a9ae"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|theme-7"}}}},"textColor":"theme-7","fontSize":"small"} -->
<p class="has-text-align-center has-theme-7-color has-text-color has-link-color has-small-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"5px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:5px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Thin Line"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"★"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('★', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:site-tagline /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="min-height:100%;padding-top:0;padding-bottom:0"><!-- wp:paragraph -->
<p><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( 'Designed with %1$sWordPress%2$s', 'stijl' ), '<a href="' . esc_url( 'https://wordpress.org' ) . '" rel="nofollow">', '</a>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:jetpack/sharing-buttons {"styleType":"icon","iconColor":"theme-1","iconColorValue":"#f4f2eb","iconBackgroundColor":"theme-2","iconBackgroundColorValue":"#000000","style":{"spacing":{"blockGap":{"left":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-jetpack-sharing-buttons has-normal-icon-size jetpack-sharing-buttons__services-list" id="jetpack-sharing-serivces-list"><!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /-->

<!-- wp:jetpack/sharing-button {"service":"mastodon","label":"Mastodon"} /-->

<!-- wp:jetpack/sharing-button {"service":"bluesky","label":"Bluesky"} /--></ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->