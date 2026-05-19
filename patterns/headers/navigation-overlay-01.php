<?php
/**
 * Title: Left 01
 * Slug: core/navigation-overlay
 * Categories: header
 * Block Types: core/template-part/navigation-overlay
 * Inserter: false
 * Viewport Width: 640
 */
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Navigation Overlay', 'twentig-one' ); ?>"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","left":"var:preset|spacing|site-padding","right":"var:preset|spacing|site-padding"},"blockGap":"var:preset|spacing|30"},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"top"}} -->
<div class="wp-block-group has-base-background-color has-background" style="min-height:100vh;padding-right:var(--wp--preset--spacing--site-padding);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--site-padding)">
	<!-- wp:group {"className":"tw-width-100","style":{"layout":{"selfStretch":"fit","flexSize":null},"position":{"type":"sticky","top":"0px"},"spacing":{"padding":{"top":"var:preset|spacing|15"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
	<div class="wp-block-group tw-width-100" style="padding-top:var(--wp--preset--spacing--15)">
		<!-- wp:navigation-overlay-close /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:navigation {"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large","layout":{"type":"flex","orientation":"vertical"},"twHoverStyle":"none"} -->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
	<!-- /wp:navigation -->
</div>
<!-- /wp:group -->
