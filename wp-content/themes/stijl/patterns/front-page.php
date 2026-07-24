<?php
/**
 * Title: front-page
 * Slug: stijl/front-page
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
<div class="wp-block-column"><!-- wp:template-part {"slug":"header","area":"header"} /-->

<!-- wp:group {"tagName":"main","metadata":{"name":"Content Wrapper"},"style":{"spacing":{"blockGap":"0","margin":{"top":"5px","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:5px;margin-bottom:0"><!-- wp:group {"metadata":{"name":"Query Loop Main"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"50%"} -->
<div class="wp-block-column" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Post Template Wrapper"},"align":"wide","className":"is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide is-style-default" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Time to Read and Title"},"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"}},"backgroundColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group alignwide has-theme-1-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"4px"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"❚"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('❚', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('reading', 'stijl');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-title {"level":1,"isLink":true,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"2x-large"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Excerpt and Meta"},"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read more.', 'stijl');?>","showMoreOnNewLine":false,"excerptLength":25} /-->

<!-- wp:group {"metadata":{"name":"Meta Info"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-bottom:0"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-toast","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:post-date {"datetime":"2026-03-09T21:37:29.368Z","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"},"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}}},"textColor":"theme-2","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50%"} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="flex-basis:50%"><!-- wp:group {"metadata":{"name":"Featured Image Wrapper"},"align":"wide","className":"is-style-default","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-3","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignwide is-style-default has-theme-3-background-color has-background" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"color":{"duotone":["#ff0000","#f4f2eb"]},"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Query Loop Wrapper"},"align":"wide","className":"stroke-outside-10","style":{"spacing":{"margin":{"top":"5px","bottom":"5px"},"blockGap":"0","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide stroke-outside-10" style="margin-top:5px;margin-bottom:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"bottom":{"width":"5px"},"top":[],"right":[],"left":[]}}} -->
<div class="wp-block-columns alignwide" style="border-bottom-width:5px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":"1","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"grid","columnCount":1}} -->
<!-- wp:group {"metadata":{"name":"Post Template Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Title and Excerpt"},"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-default" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"❚"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('❚', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('reading', 'stijl');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read more.', 'stijl');?>","showMoreOnNewLine":false,"excerptLength":25} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Meta Info"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-toast","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:post-date {"datetime":"2026-03-09T21:37:29.368Z","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:query {"queryId":0,"query":{"perPage":2,"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"style":{"spacing":{"blockGap":"5px"}},"backgroundColor":"theme-2","layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"metadata":{"name":"Post Template Wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}},"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","flexWrap":"nowrap"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Title and Excerpt"},"className":"is-style-default","style":{"spacing":{"padding":{"bottom":"0","top":"0","right":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"},"layout":{"selfStretch":"fill","flexSize":null}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
<div class="wp-block-group is-style-default" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"metadata":{"name":"Time to Read"},"style":{"spacing":{"blockGap":"4px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"metadata":{"name":"❚"},"style":{"spacing":{"padding":{"right":"var:preset|spacing|20"}}},"fontSize":"small"} -->
<p class="has-small-font-size" style="padding-right:var(--wp--preset--spacing--20)"><?php esc_html_e('❚', 'stijl');?></p>
<!-- /wp:paragraph -->

<!-- wp:post-time-to-read /-->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php esc_html_e('reading', 'stijl');?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->

<!-- wp:post-excerpt {"moreText":"<?php esc_attr_e('Read more.', 'stijl');?>","showMoreOnNewLine":false,"excerptLength":25} /--></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Meta Info"},"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category","separator":"","className":"is-style-toast","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"small"} /-->

<!-- wp:post-date {"datetime":"2026-03-09T21:37:29.368Z","style":{"typography":{"fontStyle":"normal","fontWeight":"600","textTransform":"none"}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","className":"stroke-outside-10"} -->
<div class="wp-block-columns alignwide stroke-outside-10"><!-- wp:column {"verticalAlignment":"stretch","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-stretch" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Series Wrapper"},"style":{"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="min-height:100%"><!-- wp:group {"metadata":{"name":"Title Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"dimensions":{"minHeight":"66.7%"},"border":{"top":{"color":"var:preset|color|theme-1","width":"5px"},"right":[],"bottom":[],"left":[]}},"backgroundColor":"theme-1","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"bottom"}} -->
<div class="wp-block-group has-theme-1-background-color has-background" style="border-top-color:var(--wp--preset--color--theme-1);border-top-width:5px;min-height:66.7%;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"2x-large"} -->
<h2 class="wp-block-heading has-2-x-large-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e('Explore Our Curated Series', 'stijl');?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"metadata":{"name":"Series List Wrapper"},"style":{"spacing":{"blockGap":"5px"}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch","verticalAlignment":"space-between"}} -->
<div class="wp-block-group has-theme-2-background-color has-background"><!-- wp:group {"metadata":{"name":"Item 1"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"theme-6","textColor":"theme-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-theme-2-color has-theme-6-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fill","flexSize":null}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"backgroundColor":"theme-6"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-theme-6-background-color has-background" style="padding-top:0;padding-bottom:0"><!-- wp:group {"metadata":{"name":"Title Wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading no-underline has-x-large-font-size" style="font-style:normal;font-weight:700"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sNeo-Plastic Web%2$s', 'stijl' ), '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50px","backgroundColor":"theme-6"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-theme-6-background-color has-background" style="flex-basis:50px"><!-- wp:group {"metadata":{"name":"Arrow Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"100px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:image {"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"Arrow"},"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"30px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"duotone":["#FFD400","#FFD400"]}}} -->
<figure class="wp-block-image size-full is-resized is-style-default" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-squared-arrow.png" alt="" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Item 2"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"theme-6","textColor":"theme-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-theme-2-color has-theme-6-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fill","flexSize":null}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"","backgroundColor":"theme-6"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-theme-6-background-color has-background"><!-- wp:group {"metadata":{"name":"Title Wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading no-underline has-x-large-font-size" style="font-style:normal;font-weight:700"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$s%3$sThe Grid Myths%4$s', 'stijl' ), '<a href="' . esc_url( '#' ) . '">', '</a>', '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50px","backgroundColor":"theme-6"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-theme-6-background-color has-background" style="flex-basis:50px"><!-- wp:group {"metadata":{"name":"Arrow Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"100px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:image {"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"Arrow"},"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"30px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"duotone":["#FFD400","#FFD400"]}}} -->
<figure class="wp-block-image size-full is-resized is-style-default" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-squared-arrow.png" alt="" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Item 3"},"style":{"elements":{"link":{"color":{"text":"var:preset|color|theme-2"}}},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"},"blockGap":"0"},"layout":{"selfStretch":"fill","flexSize":null}},"backgroundColor":"theme-6","textColor":"theme-2","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"stretch"}} -->
<div class="wp-block-group has-theme-2-color has-theme-6-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"isStackedOnMobile":false,"align":"wide","style":{"spacing":{"blockGap":{"left":"0px"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"layout":{"selfStretch":"fill","flexSize":null}}} -->
<div class="wp-block-columns alignwide is-not-stacked-on-mobile" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"stretch","width":"","backgroundColor":"theme-6"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-theme-6-background-color has-background"><!-- wp:group {"metadata":{"name":"Title Wrapper"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"0","bottom":"0"}},"layout":{"selfStretch":"fill","flexSize":null},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left","verticalAlignment":"center","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3,"className":"no-underline","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"x-large"} -->
<h3 class="wp-block-heading no-underline has-x-large-font-size" style="font-style:normal;font-weight:700"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element, 3. is the start of a 'a' HTML element, 4. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$s%2$s%3$sSwiss Revival%4$s', 'stijl' ), '<a href="' . esc_url( '#' ) . '">', '</a>', '<a href="' . esc_url( '#' ) . '">', '</a>' ); ?></h3>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"stretch","width":"50px","backgroundColor":"theme-6"} -->
<div class="wp-block-column is-vertically-aligned-stretch has-theme-6-background-color has-background" style="flex-basis:50px"><!-- wp:group {"metadata":{"name":"Arrow Wrapper"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fixed","flexSize":"100px"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"theme-2","layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center"}} -->
<div class="wp-block-group has-theme-2-background-color has-background" style="min-height:100%;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0"><!-- wp:image {"width":"30px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","metadata":{"name":"Arrow"},"className":"is-style-default","style":{"layout":{"selfStretch":"fixed","flexSize":"30px"},"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"}},"color":{"duotone":["#FFD400","#FFD400"]}}} -->
<figure class="wp-block-image size-full is-resized is-style-default" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/stijl-squared-arrow.png" alt="" style="aspect-ratio:1;object-fit:cover;width:30px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer-newsletter"} /--></div>
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