<?php
/**
 * Title: Related posts: with sidebar
 * Slug: twentigone/related-posts-sidebar
 * Categories: utilities
 * Post Types: wp_template
 * Inserter: false
 */

?>

<!-- wp:group {"metadata":{"name":"Related"},"className":"related-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|65"},"padding":{"top":"var:preset|spacing|65"}},"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"},"right":{},"bottom":{},"left":{}}}} -->
<div class="wp-block-group related-section" style="border-top-color:var(--wp--preset--color--tertiary);border-top-width:1px;margin-top:var(--wp--preset--spacing--65);padding-top:var(--wp--preset--spacing--65)">
	<!-- wp:pattern {"slug":"twentigone/hidden-related-heading"} /-->
	<!-- wp:query {"query":{"perPage":2,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"twSinglePostsFilter":"same-category"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}},"layout":{"type":"constrained"},"twStretchedLink":true} -->
			<div class="wp-block-group tw-stretched-link" style="margin-bottom:var(--wp--preset--spacing--15)">
				<!-- wp:post-featured-image {"aspectRatio":"4/3","sizeSlug":"large","useFirstImageFromPost":true,"className":"has-format-icon"} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"12px"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:12px;line-height:1.3">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
