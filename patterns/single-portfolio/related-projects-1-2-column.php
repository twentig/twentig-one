<?php
/**
 * Title: Related projects: 2-column
 * Slug: twentigone/related-projects-1-2-column
 * Categories: utilities
 * Post Types: wp_template
 * Inserter: false
 */

?>

<!-- wp:group {"metadata":{"name":"Related"},"className":"related-section","align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull related-section" style="margin-top:var(--wp--preset--spacing--70)">
	<!-- wp:pattern {"slug":"twentigone/hidden-portfolio-related-heading"} /-->
	<!-- wp:query {"query":{"perPage":2,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"twSinglePostsFilter":"same-category"},"namespace":"twentig/portfolio-list","align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|35"}},"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|15"}}},"twStretchedLink":true} -->
			<div class="wp-block-group tw-stretched-link" style="margin-bottom:var(--wp--preset--spacing--15)">
				<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large","useFirstImageFromPost":true} /-->
				<!-- wp:post-title {"level":3,"isLink":true,"fontSize":"large"} /-->
				<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","twShowManualOnly":true} /-->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
