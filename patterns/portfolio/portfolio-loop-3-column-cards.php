<?php
/**
 * Title: Portfolio 3-column: card
 * Slug: twentigone/portfolio-loop-3-column-cards
 * Categories: portfolio
 * Viewport width: 1400
 * Block Types: core/query/twentig/portfolio-list
 */
?>

<!-- wp:query {"query":{"perPage":24,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"namespace":"twentig/portfolio-list","align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"300px"}} -->
		<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","twStretchedLink":true} -->
		<div class="wp-block-group has-base-2-background-color has-background tw-stretched-link" style="min-height:100%">
			<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large","useFirstImageFromPost":true,"twHover":"zoom"} /-->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}}} -->
			<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
				<!-- wp:post-title {"isLink":true,"className":"tw-link-no-underline","fontSize":"medium"} /-->
				<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","twShowManualOnly":true} /-->
			</div>
			<!-- /wp:group -->
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
