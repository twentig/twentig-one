<?php
/**
 * Title: Single project: fullscreen cover
 * Slug: twentigone/template-single-portfolio-fullscreen-cover
 * Template Types: single-portfolio
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header-transparent"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":100,"minHeightUnit":"vh","contentPosition":"bottom center","metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"}}},"textColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-center has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--65);min-height:100vh">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:post-title {"textAlign":"center","level":1} /-->
			<!-- wp:post-excerpt {"textAlign":"center","className":"tw-text-balance","style":{"typography":{"lineHeight":"1.35"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"large","twShowManualOnly":true} /-->
		</div>
	</div>
	<!-- /wp:cover -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
	</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","theme":"twentig-one","tagName":"footer"} /-->
