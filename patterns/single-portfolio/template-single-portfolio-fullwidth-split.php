<?php
/**
 * Title: Single project: full-width split
 * Slug: twentigone/template-single-portfolio-fullwidth-split
 * Template Types: single-portfolio
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","theme":"twentig-one","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--65)">
		<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"twStack":"md"} -->
		<div class="wp-block-columns alignfull are-vertically-aligned-center tw-cols-stack-md">
			<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|site-padding","left":"var:preset|spacing|site-padding","top":"var:preset|spacing|65","bottom":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--65);padding-right:var(--wp--preset--spacing--site-padding);padding-bottom:var(--wp--preset--spacing--65);padding-left:var(--wp--preset--spacing--site-padding);flex-basis:50%">
				<!-- wp:post-title {"textAlign":"center","level":1} /-->
				<!-- wp:post-excerpt {"textAlign":"center","className":"tw-text-balance","style":{"typography":{"lineHeight":"1.35"},"spacing":{"margin":{"top":"20px"}}},"fontSize":"large","twShowManualOnly":true} /-->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:post-featured-image {"aspectRatio":"1","align":"wide"} /-->
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
