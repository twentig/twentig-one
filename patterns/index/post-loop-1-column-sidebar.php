<?php
/**
 * Title: Posts single-column: with sidebar
 * Slug: twentigone/post-loop-1-column-sidebar
 * Categories: posts
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|55"}}},"twStack":"md"} -->
<div class="wp-block-columns alignwide tw-cols-stack-md">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group -->
		<div class="wp-block-group">
			<!-- wp:query {"query":{"pages":0,"offset":"2","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"perPage":8} } -->
			<div class="wp-block-query">
				<!-- wp:post-template -->
					<!-- wp:group {"twStretchedLink":true} -->
					<div class="wp-block-group tw-stretched-link">
						<!-- wp:post-featured-image {"sizeSlug":"large","useFirstImageFromPost":true,"className":"has-format-icon","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->
						<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
						<!-- wp:post-excerpt {"excerptLength":45,"style":{"spacing":{"margin":{"top":"var:preset|spacing|15"}}}} /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"20px"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
						<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:20px;line-height:1.3">
							<!-- wp:post-terms {"term":"category"} /-->
							<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
							<!-- wp:post-date /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- wp:separator {"tagName":"div","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
						<div class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"></div>
					<!-- /wp:separator -->
				<!-- /wp:post-template -->
				<!-- wp:query-pagination {"paginationArrow":"arrow","showLabel":false,"layout":{"type":"flex"}} -->
					<!-- wp:query-pagination-previous /-->
					<!-- wp:query-pagination-numbers {"midSize":1} /-->
					<!-- wp:query-pagination-next /-->
				<!-- /wp:query-pagination -->
				<!-- wp:query-no-results -->
					<!-- wp:paragraph -->
					<p><?php echo esc_html_x( 'Sorry, but nothing was found.', 'Message explaining that there are no results returned.', 'twentig-one' ); ?></p>
					<!-- /wp:paragraph -->
				<!-- /wp:query-no-results -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
	<!-- wp:column {"width":"340px"} -->
	<div class="wp-block-column" style="flex-basis:340px">
		<!-- wp:template-part {"slug":"sidebar","theme":"twentig-one","area":"uncategorized"} /-->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->
