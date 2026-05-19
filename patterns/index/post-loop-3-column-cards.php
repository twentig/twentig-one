<?php
/**
 * Title: Posts 3-column: card
 * Slug: twentigone/post-loop-3-column-cards
 * Categories: posts
 * Viewport width: 1400
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":12},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"300px"}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","layout":{"type":"flex","orientation":"vertical"},"twStretchedLink":true} -->
		<div class="wp-block-group has-base-2-background-color has-background tw-stretched-link" style="min-height:100%">
			<!-- wp:post-featured-image {"aspectRatio":"3/2","width":"100%","sizeSlug":"large","useFirstImageFromPost":true,"className":"has-format-icon","twHover":"zoom"} /-->
			<!-- wp:post-title {"isLink":true,"className":"tw-link-no-underline","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|15","left":"var:preset|spacing|20"}}},"fontSize":"large"} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|auto"},"padding":{"right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--auto);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20);line-height:1.3">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
				<!-- wp:post-date /-->
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
	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">
			<?php echo esc_html_x( 'Sorry, but nothing was found.', 'Message explaining that there are no results returned.', 'twentig-one' ); ?>
		</p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->
