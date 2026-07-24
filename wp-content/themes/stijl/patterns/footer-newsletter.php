<?php
/**
 * Title: footer-newsletter
 * Slug: stijl/footer-newsletter
 * Inserter: no
 */
?>
<!-- wp:group {"metadata":{"name":"footer-newsletter","patternName":"stijl/footer-newsletter"},"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|60"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-pattern-line-scaled.png","dimRatio":0,"customOverlayColor":"#b8a9ae","isUserOverlayColor":false,"focalPoint":{"x":0.5,"y":0},"minHeight":205,"isDark":false,"sizeSlug":"full","metadata":{"name":"Patterns"},"align":"wide","style":{"border":{"top":{"width":"5px"},"bottom":{"width":"0px","style":"none"},"right":[],"left":[]}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light" style="border-top-width:5px;border-bottom-style:none;border-bottom-width:0px;min-height:205px"><img class="wp-block-cover__image-background size-full" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-pattern-line-scaled.png" style="object-position:50% 0%" data-object-fit="cover" data-object-position="50% 0%"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#b8a9ae"></span><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"placeholder":"Write title…","style":{"typography":{"textAlign":"center"},"elements":{"link":{"color":{"text":"var:preset|color|theme-7"}}}},"textColor":"theme-7","fontSize":"small"} -->
<p class="has-text-align-center has-theme-7-color has-text-color has-link-color has-small-font-size"></p>
<!-- /wp:paragraph --></div></div>
<!-- /wp:cover -->

<!-- wp:columns {"align":"wide","className":"stroke-outside-10","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"5px"}}},"backgroundColor":"theme-4"} -->
<div class="wp-block-columns alignwide stroke-outside-10 has-theme-4-background-color has-background" style="margin-top:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"backgroundColor":"theme-4","textColor":"theme-1"} -->
<div class="wp-block-column is-vertically-aligned-bottom has-theme-1-color has-theme-4-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2x-large"} -->
<h2 class="wp-block-heading has-2-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Join The Manifest', 'stijl');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size"><?php esc_html_e('Dispatches from the grid, delivered weekly.', 'stijl');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"theme-4"} -->
<div class="wp-block-column is-vertically-aligned-bottom has-theme-4-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:jetpack/contact-form {"jetpackCRM":false,"variationName":"default-empty","salesforceData":{"organizationId":"","sendToSalesforce":false},"mailpoet":{"listId":null,"listName":null,"enabledForForm":false},"backgroundColor":"theme-4","textColor":"theme-1","className":"no-form-gap is-style-animated","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"top"}} -->
<div class="wp-block-jetpack-contact-form no-form-gap is-style-animated has-theme-1-color has-theme-4-background-color has-text-color has-background has-link-color"><!-- wp:jetpack/field-email {"required":true} -->
<div><!-- wp:jetpack/label {"label":"Email","textColor":"theme-1","fontSize":"medium","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}}} /-->

<!-- wp:jetpack/input {"backgroundColor":"theme-2","textColor":"theme-1","fontSize":"large","style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}}}} /--></div>
<!-- /wp:jetpack/field-email -->

<!-- wp:button {"tagName":"button","type":"submit","backgroundColor":"theme-6","textColor":"theme-2","lock":{"move":false,"remove":true},"metadata":{"name":"Submit button"},"className":"form-button-submit is-submit","style":{"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}},"dimensions":{"width":"100%"}},"fontSize":"medium"} -->
<div class="wp-block-button form-button-submit is-submit"><button type="submit" class="wp-block-button__link has-theme-2-color has-theme-6-background-color has-text-color has-background has-link-color has-medium-font-size has-custom-font-size wp-element-button" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)"><?php esc_html_e( 'Subscribe', 'stijl' ); ?></button></div>
<!-- /wp:button --></div>
<!-- /wp:jetpack/contact-form --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"5px","bottom":"0px"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:5px;padding-bottom:0px"><!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Thin Line"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"★"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('❙', 'stijl');?></p>
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