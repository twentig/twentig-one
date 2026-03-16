<?php
/**
 * Title: Single post: cover
 * Slug: twentigone/template-single-post-cover
 * Template Types: single
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header-transparent"} /-->

<!-- wp:group {"tagName":"main","align":"full","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignfull" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:cover {"useFeaturedImage":true,"dimRatio":50,"isUserOverlayColor":true,"minHeight":75,"minHeightUnit":"vh","contentPosition":"center center","metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"}}},"textColor":"white","layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull has-white-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--65);min-height:75vh">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:post-title {"textAlign":"center","level":1} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"6px"},"typography":{"lineHeight":"1.3"}},"fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
			<div class="wp-block-group has-small-font-size" style="line-height:1.3">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
				<!-- wp:post-date /-->
			</div>
			<!-- /wp:group -->
		</div>
	</div>
	<!-- /wp:cover -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:post-terms {"term":"post_tag","className":"is-style-tw-outline-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"secondary","fontSize":"x-small"} /-->
	<!-- wp:pattern {"slug":"twentigone/comments-default"} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
