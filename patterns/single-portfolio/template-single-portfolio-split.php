<?php
/**
 * Title: Single project: split
 * Slug: twentigone/template-single-portfolio-split
 * Template Types: single-portfolio
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header-transparent"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|65"},"margin":{"bottom":"var:preset|spacing|65"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--65);padding-bottom:var(--wp--preset--spacing--65)">
		<!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|55"}}},"twStack":"md"} -->
		<div class="wp-block-columns alignwide are-vertically-aligned-center tw-cols-stack-md">
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:post-title {"level":1} /-->
				<!-- wp:post-excerpt {"className":"tw-text-balance","style":{"typography":{"lineHeight":"1.35"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"large","twShowManualOnly":true} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center">
				<!-- wp:post-featured-image /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
