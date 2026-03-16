<?php
/**
 * Title: Post navigation
 * Slug: twentigone/post-navigation-narrow
 * Categories: utilities
 * Post Types: wp_template
 * Inserter: false
 */

?>

<!-- wp:group {"ariaLabel":"<?php esc_attr_e( 'Post navigation', 'twentig-one' ); ?>","tagName":"nav","style":{"spacing":{"margin":{"top":"var:preset|spacing|65"}}}} -->
<nav class="wp-block-group" aria-label="<?php esc_attr_e( 'Post navigation', 'twentig-one' ); ?>" style="margin-top:var(--wp--preset--spacing--65)">
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"var:preset|spacing|35"},"padding":{"top":"var:preset|spacing|40"}},"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"},"right":[],"bottom":[],"left":[]}}} -->
	<div class="wp-block-columns" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;padding-top:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-navigation-link {"type":"previous","label":"←\u0026nbsp; <?php esc_html_e( 'Previous', 'twentig-one' ); ?>","showTitle":true,"linkLabel":true,"className":"is-style-tw-nav-stack"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:post-navigation-link {"textAlign":"right","label":"<?php esc_html_e( 'Next', 'twentig-one' ); ?> \u0026nbsp;→","showTitle":true,"linkLabel":true,"className":"is-style-tw-nav-stack tw-sm-text-left","fontSize":"normal"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</nav>
<!-- /wp:group -->
