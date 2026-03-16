<?php
/**
 * Title: Single post: with sidebar
 * Slug: twentigone/template-single-post-sidebar
 * Template Types: single
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|65"},"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull" style="margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--65)">
		<!-- wp:group {"align":"wide","layout":{"type":"constrained","contentSize":"62rem","justifyContent":"left"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:post-title {"level":1} /-->
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10","margin":{"top":"20px"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap"}} -->
			<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="margin-top:20px;line-height:1.3">
				<!-- wp:post-terms {"term":"category"} /-->
				<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
				<!-- wp:post-date /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|65","left":"var:preset|spacing|55"}}},"twStack":"md"} -->
	 <div class="wp-block-columns alignwide tw-cols-stack-md">
		<!-- wp:column {"width":"","layout":{"type":"constrained","contentSize":"62rem","justifyContent":"left","wideSize":"62rem"}} -->
		<div class="wp-block-column">
			<!-- wp:post-featured-image {"className":"has-format-media","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} /-->
			<!-- wp:post-content {"layout":{"type":"default"}} /-->
			<!-- wp:post-terms {"term":"post_tag","className":"is-style-tw-outline-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"secondary","fontSize":"x-small"} /-->
			<!-- wp:pattern {"slug":"twentigone/comments-default"} /-->
			<!-- wp:pattern {"slug":"twentigone/post-navigation-narrow"} /-->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"340px"} -->
		<div class="wp-block-column" style="flex-basis:340px">
			<!-- wp:template-part {"slug":"sidebar","tagName":"aside","area":"uncategorized"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
