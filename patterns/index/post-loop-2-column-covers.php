<?php
/**
 * Title: Posts 2-column: cover
 * Slug: twentigone/post-loop-2-column-covers
 * Categories: posts
 * Viewport width: 1400
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":12},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 80%)","contentPosition":"bottom left","style":{"spacing":{"padding":{"top":"var:preset|spacing|25","right":"var:preset|spacing|25","bottom":"var:preset|spacing|25","left":"var:preset|spacing|25"}},"dimensions":{"aspectRatio":"1"}},"twStretchedLink":true,"twHover":"zoom"} -->
		<div class="wp-block-cover has-custom-content-position is-position-bottom-left tw-stretched-link tw-hover-zoom" style="padding-top:var(--wp--preset--spacing--25);padding-right:var(--wp--preset--spacing--25);padding-bottom:var(--wp--preset--spacing--25);padding-left:var(--wp--preset--spacing--25)">
			<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0.7) 0%,rgba(0,0,0,0) 80%)"></span>
			<div class="wp-block-cover__inner-container">
				<!-- wp:post-title {"isLink":true,"className":"tw-link-no-underline","fontSize":"x-large"} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|15"}},"typography":{"lineHeight":"1.3"}},"fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
				<div class="wp-block-group has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--15);line-height:1.3">
					<!-- wp:post-terms {"term":"category"} /-->
					<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
					<!-- wp:post-date /-->
				</div>
				<!-- /wp:group -->
			</div>
		</div>
		<!-- /wp:cover -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers {"midSize":1} /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php echo esc_html_x( 'Sorry, but nothing was found.', 'Message explaining that there are no results returned.', 'twentig-one' ); ?>
		</p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
