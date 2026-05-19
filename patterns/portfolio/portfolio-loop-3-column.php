<?php
/**
 * Title: Portfolio 3-column
 * Slug: twentigone/portfolio-loop-3-column
 * Categories: portfolio
 * Viewport width: 1400
 * Block Types: core/query/twentig/portfolio-list
 */
?>

<!-- wp:query {"query":{"perPage":24,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"namespace":"twentig/portfolio-list","align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"300px"}} -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"twStretchedLink":true} -->
		<div class="wp-block-group tw-stretched-link" style="margin-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:post-featured-image {"aspectRatio":"4/3","sizeSlug":"large","useFirstImageFromPost":true} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
			<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","twShowManualOnly":true} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
