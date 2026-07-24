<?php
/**
 * Title: Query cards with images
 * Slug: stijl/query-cards-with-images
 * Categories: posts
 * Block Types: core/query
 * Viewport Width: 1300
 */
?>
<!-- wp:query {"queryId":0,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[]},"metadata":{"name":"Query Cards With Images","categories":["Posts"]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"5px"}},"backgroundColor":"theme-2","layout":{"type":"default","columnCount":2}} -->
<!-- wp:group {"metadata":{"name":"Post Template Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|20"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"theme-1"} -->
<div class="wp-block-columns has-theme-1-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"25%","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-right:0;padding-left:0;flex-basis:25%"><!-- wp:post-featured-image {"aspectRatio":"1"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"5%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:5%"></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"top","width":"","style":{"spacing":{"padding":{"right":"0","left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-top" style="padding-right:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Meta Info"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-toast","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"x-small"} /-->

<!-- wp:post-date {"datetime":"2026-03-09T21:37:29.368Z","isLink":true,"className":"no-underline","fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"25%","style":{"spacing":{"padding":{"right":"0","left":"0","top":"var:preset|spacing|20","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:var(--wp--preset--spacing--70);padding-left:0;flex-basis:25%"><!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read more.', 'stijl');?>","showMoreOnNewLine":false,"excerptLength":20} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"metadata":{"name":"Pagination Wrapper"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30","margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|theme-1"}}},"border":{"top":{"color":"var:preset|color|theme-2","width":"5px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"theme-4","textColor":"theme-1","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull has-theme-1-color has-theme-4-background-color has-text-color has-background has-link-color" style="border-top-color:var(--wp--preset--color--theme-2);border-top-width:5px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:query-pagination {"align":"wide","style":{"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query -->