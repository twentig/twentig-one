<?php
/**
 * Title: Posts 2-column: text-only
 * Slug: twentigone/post-loop-2-column-text
 * Categories: posts
 * Viewport width: 1400
 * Block Types: core/query
 */
?>

<!-- wp:query {"query":{"perPage":12,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide"} -->
<div class="wp-block-query alignwide">
	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"bottom":"var:preset|spacing|35","top":"var:preset|spacing|35","left":"var:preset|spacing|35","right":"var:preset|spacing|35"}},"dimensions":{"minHeight":"100%"},"border":{"width":"1px"}},"borderColor":"tertiary","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"space-between"},"twStretchedLink":true,"twHoverBorderColor":"var:preset|color|contrast"} -->
		<div class="wp-block-group has-border-color has-tertiary-border-color tw-stretched-link" style="border-width:1px;min-height:100%;padding-top:var(--wp--preset--spacing--35);padding-right:var(--wp--preset--spacing--35);padding-bottom:var(--wp--preset--spacing--35);padding-left:var(--wp--preset--spacing--35)">
			<!-- wp:group -->
			<div class="wp-block-group">
				<!-- wp:post-title {"isLink":true,"fontSize":"x-large","className":"tw-link-no-underline"} /-->
				<!-- wp:post-excerpt {"excerptLength":35,"style":{"spacing":{"margin":{"top":"var:preset|spacing|15"}}}} /-->
			</div>
			<!-- /wp:group -->
			<!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|25"}},"typography":{"lineHeight":"1.3"},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"secondary","fontSize":"x-small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
			<div class="wp-block-group has-secondary-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--25);line-height:1.3">
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
