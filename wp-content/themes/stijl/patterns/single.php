<?php
/**
 * Title: single
 * Slug: stijl/single
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"Top Stroke"},"style":{"dimensions":{"minHeight":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"theme-4","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-theme-4-background-color has-background" style="min-height:0px;margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Left Corner"},"style":{"dimensions":{"minHeight":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"right":{"width":"5px"}},"layout":{"selfStretch":"fixed","flexSize":"25px"}},"backgroundColor":"theme-1","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="border-right-width:5px;min-height:20px;margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0rem"}}} -->
<p style="font-size:0rem"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Right Corner"},"style":{"dimensions":{"minHeight":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"5px"}},"layout":{"selfStretch":"fixed","flexSize":"25px"}},"backgroundColor":"theme-1","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="border-left-width:5px;min-height:20px;margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0rem"}}} -->
<p style="font-size:0rem"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"isStackedOnMobile":false,"metadata":{"name":"Columns"},"style":{"spacing":{"blockGap":{"top":"5px","left":"5px"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"width":"5px"},"bottom":{"width":"5px"}}}} -->
<div class="wp-block-columns is-not-stacked-on-mobile" style="border-top-width:5px;border-bottom-width:5px;margin-top:0;margin-bottom:0"><!-- wp:column {"width":"20px","backgroundColor":"theme-3"} -->
<div class="wp-block-column has-theme-3-background-color has-background" style="flex-basis:20px"></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Wrapper"},"style":{"spacing":{"blockGap":"0","margin":{"top":"5px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:5px;margin-bottom:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"style":{"spacing":{"blockGap":"0"}}} -->
<div class="wp-block-column"><!-- wp:group {"metadata":{"name":"Title and meta"},"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Date and Time to Read"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"❚"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('❚', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('reading', 'stijl');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"metadata":{"name":"dash"},"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('·', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"datetime":"2026-03-09T21:37:29.368Z","textAlign":"right","format":"M j, Y","style":{"typography":{"textTransform":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"align":"wide","fontSize":"2x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Content"},"align":"wide","style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-right:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-content {"lock":{"move":true,"remove":true},"layout":{"type":"default"}} /-->

<!-- wp:group {"metadata":{"name":"Categories"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-toast","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:jetpack/sharing-buttons {"styleType":"icon","size":"has-small-icon-size","iconColor":"theme-1","iconColorValue":"#f4f2eb","iconBackgroundColor":"theme-2","iconBackgroundColorValue":"#000000","style":{"spacing":{"blockGap":{"left":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<ul class="wp-block-jetpack-sharing-buttons has-small-icon-size jetpack-sharing-buttons__services-list" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)" id="jetpack-sharing-serivces-list"><!-- wp:jetpack/sharing-button {"service":"linkedin","label":"LinkedIn"} /-->

<!-- wp:jetpack/sharing-button {"service":"mastodon","label":"Mastodon"} /-->

<!-- wp:jetpack/sharing-button {"service":"bluesky","label":"Bluesky"} /--></ul>
<!-- /wp:jetpack/sharing-buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Comments Wrapper"},"align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-right:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
<div class="wp-block-comments wp-block-comments-query-loop"><!-- wp:heading {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-x-large-font-size" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Comments', 'stijl');?></h2>
<!-- /wp:heading -->

<!-- wp:comments-title {"level":3} /-->

<!-- wp:comment-template -->
<!-- wp:group {"metadata":{"name":"Comment Stack"},"style":{"layout":{"selfStretch":"fill","flexSize":null},"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":48} /-->

<!-- wp:group {"metadata":{"name":"Comments Detail"},"style":{"spacing":{"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group"><!-- wp:comment-author-name /-->

<!-- wp:comment-date {"className":"no-underline"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:comment-edit-link /-->

<!-- wp:comment-reply-link /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination {"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"25%"} -->
<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"metadata":{"name":"Sidebar"},"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"❚"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('❚', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"fontSize":"small"} -->
<h2 class="wp-block-heading has-small-font-size"><?php esc_html_e('Latest posts', 'stijl');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:latest-posts {"displayAuthor":true} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"20px","backgroundColor":"theme-5"} -->
<div class="wp-block-column has-theme-5-background-color has-background" style="flex-basis:20px"></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"metadata":{"name":"Bottom Stroke"},"style":{"dimensions":{"minHeight":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"theme-6","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-theme-6-background-color has-background" style="min-height:20px;margin-top:0;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Left Corner"},"style":{"dimensions":{"minHeight":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"right":{"width":"5px"}},"layout":{"selfStretch":"fixed","flexSize":"25px"}},"backgroundColor":"theme-1","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="border-right-width:5px;min-height:20px;margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0rem"}}} -->
<p style="font-size:0rem"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Right Corner"},"style":{"dimensions":{"minHeight":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"left":{"width":"5px"}},"layout":{"selfStretch":"fixed","flexSize":"25px"}},"backgroundColor":"theme-1","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="border-left-width:5px;min-height:20px;margin-top:0;margin-bottom:0"><!-- wp:paragraph {"style":{"typography":{"fontSize":"0rem"}}} -->
<p style="font-size:0rem"></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->