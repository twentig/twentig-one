<?php
/**
 * Title: Related posts: 2-column text-only
 * Slug: twentigone/related-posts-2-column-text
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
			<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|20","top":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px"}},"borderColor":"tertiary","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"},"twStretchedLink":true,"twHoverBorderColor":"var:preset|color|contrast"} -->
			<div class="wp-block-group has-border-color has-tertiary-border-color tw-stretched-link tw-hover-border" style="border-width:1px;min-height:100%;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:group -->
				<div class="wp-block-group">
					<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large","className":"tw-link-no-underline"} /-->
				</div>
				<!-- /wp:group -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|15"}},"typography":{"lineHeight":"1.3"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--15);line-height:1.3">
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
