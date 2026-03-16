<?php
/**
 * Title: Single project: wide image
 * Slug: twentigone/template-single-portfolio-default
 * Template Types: single-portfolio
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"},"padding":{"top":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--65)">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:post-title {"textAlign":"center","level":1} /-->
			<!-- wp:post-excerpt {"textAlign":"center","className":"tw-text-balance","style":{"typography":{"lineHeight":"1.35"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"large","twShowManualOnly":true} /-->
		</div>
		<!-- /wp:group -->
		<!-- wp:post-featured-image {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
