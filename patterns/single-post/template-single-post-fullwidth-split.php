<?php
/**
 * Title: Single post: full-width split
 * Slug: twentigone/template-single-post-fullwidth-split
 * Template Types: single
 * Viewport width: 1400
 * Inserter: false
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-base-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--65)">
		<!-- wp:columns {"verticalAlignment":"center","align":"full","style":{"spacing":{"blockGap":{"top":"0","left":"0"}}},"twStack":"md"} -->
		<div class="wp-block-columns alignfull are-vertically-aligned-center tw-cols-stack-md">
			<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"right":"var:preset|spacing|site-padding","left":"var:preset|spacing|site-padding","top":"var:preset|spacing|65","bottom":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-column is-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--65);padding-right:var(--wp--preset--spacing--site-padding);padding-bottom:var(--wp--preset--spacing--65);padding-left:var(--wp--preset--spacing--site-padding);flex-basis:50%">
				<!-- wp:post-title {"textAlign":"center","level":1,"fontSize":"3-x-large"} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"20px"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
				<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="margin-top:20px;line-height:1.3">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->
			<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
				<!-- wp:post-featured-image {"aspectRatio":"1"} /-->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:post-terms {"term":"post_tag","className":"is-style-tw-outline-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"secondary","fontSize":"x-small"} /-->
	<!-- wp:pattern {"slug":"twentigone/comments-default"} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
	</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
