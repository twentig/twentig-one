<?php
/**
 * Title: Posts editorial list
 * Slug: twentigone/post-loop-editorial-list
 * Categories: posts
 * Viewport width: 1400
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"border":{"top":{"color":"var:preset|color|tertiary","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"default"}} -->
		<!-- wp:group {"twStretchedLink":true} -->
		<div class="wp-block-group tw-stretched-link">
			<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|55"}}}} -->
			<div class="wp-block-columns">
				<!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%">
					<!-- wp:post-title {"isLink":true,"className":"tw-text-balance","fontSize":"xx-large"} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"20px"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:20px;line-height:1.3">
						<!-- wp:post-terms {"term":"category"} /-->
						<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
						<!-- wp:post-date /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column {"width":"33.33%","className":"tw-empty-hidden tw-sm-order-first"} -->
				<div class="wp-block-column tw-empty-hidden tw-sm-order-first" style="flex-basis:33.33%">
					<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large","className":"has-format-icon","twHover":"fade"} /-->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:group -->
		<!-- wp:separator {"tagName":"div","style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
		<div class="wp-block-separator has-alpha-channel-opacity" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"></div>
		<!-- /wp:separator -->
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
