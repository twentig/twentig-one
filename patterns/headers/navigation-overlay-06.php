<?php
/**
 * Title: Left 06
 * Slug: twentigone/navigation-overlay-06
 * Categories: header
 * Block Types: core/template-part/navigation-overlay
 * Inserter: false
 * Viewport Width: 640
 */
?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Navigation Overlay', 'twentig-one' ); ?>"},"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|20","left":"var:preset|spacing|site-padding","right":"var:preset|spacing|site-padding"},"blockGap":"var:preset|spacing|65"},"dimensions":{"minHeight":"100vh"}},"backgroundColor":"base","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-base-background-color has-background" style="min-height:100vh;padding-right:var(--wp--preset--spacing--site-padding);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--site-padding)">
	<!-- wp:group {"className":"tw-width-100","style":{"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"top":"var:preset|spacing|15"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group tw-width-100" style="padding-top:var(--wp--preset--spacing--15)">
		<!-- wp:site-title /-->
		<!-- wp:navigation-overlay-close /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:navigation {"showSubmenuIcon":false,"submenuVisibility":"always","overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"},"layout":{"selfStretch":"fit","flexSize":null},"typography":{"lineHeight":"1.2"}},"fontSize":"xx-large","layout":{"type":"flex","orientation":"vertical"},"twHoverStyle":"none"} -->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
		<!-- wp:navigation-link {"isTopLevelLink":true} /-->
	<!-- /wp:navigation -->
	<!-- wp:group {"className":"tw-width-100","style":{"spacing":{"margin":{"top":"var:preset|spacing|auto"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group tw-width-100" style="margin-top:var(--wp--preset--spacing--auto)">
		<!-- wp:buttons -->
		<div class="wp-block-buttons">
			<!-- wp:button {"width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get started', 'twentig-one' ); ?></a></div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
