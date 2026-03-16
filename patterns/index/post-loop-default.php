<?php
/**
 * Title: Posts 2-column
 * Slug: twentigone/post-loop-default
 * Categories: posts
 * Viewport width: 1400
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|35"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"twStretchedLink":true} -->
		<div class="wp-block-group tw-stretched-link" style="margin-bottom:var(--wp--preset--spacing--30)">
			<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large","useFirstImageFromPost":true,"className":"has-format-icon"} /-->
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- wp:post-excerpt {"excerptLength":35,"style":{"spacing":{"margin":{"top":"var:preset|spacing|15"}}}} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"20px"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:20px;line-height:1.3">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
				<!-- wp:post-date /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex","justifyContent":"center"}} -->
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
