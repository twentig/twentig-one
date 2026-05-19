<?php
/**
 * Title: Related posts: 2-column covers
 * Slug: twentigone/related-posts-2-column-covers
 * Categories: utilities
 * Post Types: wp_template
 */

?>

<!-- wp:group {"metadata":{"name":"Related"},"align":"full","className":"related-section","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull related-section" style="margin-top:var(--wp--preset--spacing--70)">
	<!-- wp:pattern {"slug":"twentigone/hidden-related-heading"} /-->
	<!-- wp:query {"query":{"perPage":3,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"twSinglePostsFilter":"same-category"},"align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3},"className":"tw-md-columns-2"} -->
			<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 80%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"dimensions":{"aspectRatio":"1"}},"twStretchedLink":true,"twHover":"zoom"} -->
			<div class="wp-block-cover has-custom-content-position is-position-bottom-left tw-stretched-link tw-hover-zoom" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 80%)"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:post-title {"level":3,"isLink":true,"className":"tw-link-no-underline","fontSize":"large"} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"12px"}},"typography":{"lineHeight":"1.3"}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group has-x-small-font-size" style="margin-top:12px;line-height:1.3">
						<!-- wp:post-terms {"term":"category"} /-->
						<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
