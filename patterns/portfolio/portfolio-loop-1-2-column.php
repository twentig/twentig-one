<?php
/**
 * Title: Portfolio single-column: with 2-column
 * Slug: twentigone/portfolio-loop-1-2-column
 * Categories: portfolio
 * Viewport width: 1400
 * Block Types: core/query/twentig/portfolio-list
 */
?>

<!-- wp:query {"query":{"perPage":24,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"namespace":"twentig/portfolio-list","align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"className":"tw-alt-grid","style":{"spacing":{"blockGap":"var:preset|spacing|35"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"twStretchedLink":true} -->
		<div class="wp-block-group tw-stretched-link" style="margin-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"full","useFirstImageFromPost":true} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
			<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","twShowManualOnly":true} /--></div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
