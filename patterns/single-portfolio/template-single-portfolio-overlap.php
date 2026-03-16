<?php
/**
 * Title: Single project: overlap image
 * Slug: twentigone/template-single-portfolio-overlap
 * Template Types: single-portfolio
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header-transparent"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
	 <div class="wp-block-group alignfull has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--65)">
		<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--65)">
			<!-- wp:post-title {"textAlign":"center","level":1} /-->
			<!-- wp:post-excerpt {"textAlign":"center","className":"tw-text-balance","style":{"typography":{"lineHeight":"1.35"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"large","twShowManualOnly":true} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"gradient":"transparent-to-base","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull has-transparent-to-base-gradient-background has-background" style="margin-top:0;margin-bottom:0">
			<!-- wp:post-featured-image {"align":"wide","className":"has-format-media","style":{"spacing":{"margin":{"top":"-16px","bottom":"-16px"}}}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
