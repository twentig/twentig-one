<?php
/**
 * Title: Portfolio single-column: cover
 * Slug: twentigone/portfolio-loop-1-column-cover
 * Categories: portfolio
 * Viewport width: 1400
 * Block Types: core/query/twentig/portfolio-list
 */
?>
<!-- wp:query {"query":{"perPage":24,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"namespace":"twentig/portfolio-list","align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default","columnCount":2}} -->
		<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 80%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|35","right":"var:preset|spacing|35","bottom":"var:preset|spacing|35","left":"var:preset|spacing|35"}},"dimensions":{"aspectRatio":"3/2"}},"twStretchedLink":true} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left tw-stretched-link" style="padding-top:var(--wp--preset--spacing--35);padding-right:var(--wp--preset--spacing--35);padding-bottom:var(--wp--preset--spacing--35);padding-left:var(--wp--preset--spacing--35)">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 80%)"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:post-title {"isLink":true,"className":"tw-link-no-underline","fontSize":"x-large"} /-->
				<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"twShowManualOnly":true} /-->
			</div>
		</div>
		<!-- /wp:cover -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
