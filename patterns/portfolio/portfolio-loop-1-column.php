<?php
/**
 * Title: Portfolio single-column
 * Slug: twentigone/portfolio-loop-1-column
 * Categories: portfolio
 * Viewport width: 1400
 * Block Types: core/query/twentig/portfolio-list
 */
?>

<!-- wp:query {"query":{"perPage":24,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"namespace":"twentig/portfolio-list","align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|65"}},"layout":{"type":"default"}} -->
		<!-- wp:group {"twStretchedLink":true} -->
		<div class="wp-block-group tw-stretched-link">
			<!-- wp:post-featured-image {"aspectRatio":"16/9","sizeSlug":"large","useFirstImageFromPost":true} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"normal","twShowManualOnly":true} /-->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|65"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
