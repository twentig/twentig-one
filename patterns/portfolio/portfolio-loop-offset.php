<?php
/**
 * Title: Portfolio 2-column: offset
 * Slug: twentigone/portfolio-loop-offset
 * Categories: portfolio
 * Viewport width: 1400
 * Block Types: core/query/twentig/portfolio-list
 */
?>

<!-- wp:query {"query":{"perPage":24,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"twentig/portfolio-list","align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"className":"tw-alt-spacer","style":{"spacing":{"blockGap":"var:preset|spacing|55"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:spacer {"height":"var:preset|spacing|65"} -->
			<div style="height:var(--wp--preset--spacing--65)" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"twStretchedLink":true} -->
			<div class="wp-block-group tw-stretched-link" style="margin-bottom:var(--wp--preset--spacing--20)">
				<!-- wp:post-featured-image {"aspectRatio":"4/3","sizeSlug":"large","useFirstImageFromPost":true} /-->
				<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
				<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","twShowManualOnly":true} /-->
			</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
