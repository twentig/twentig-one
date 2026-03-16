<?php
/**
 * Title: Single post: title banner
 * Slug: twentigone/template-single-post-title-banner
 * Template Types: single
 * Viewport width: 1400
 * Inserter: false
 */
?>

<!-- wp:template-part {"slug":"header","tagName":"header","className":"header-transparent"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--70)">
	<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"},"padding":{"bottom":"var:preset|spacing|65"}}},"backgroundColor":"base-3","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-base-3-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--65);padding-bottom:var(--wp--preset--spacing--65)">
		<!-- wp:post-title {"textAlign":"center","level":1} /-->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","fontSize":"small","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group has-secondary-color has-text-color has-small-font-size" style="line-height:1.3">
			<!-- wp:post-terms {"term":"category"} /-->
			<!-- wp:paragraph --><p>·</p><!-- /wp:paragraph -->
			<!-- wp:post-date /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
	<!-- wp:post-content {"align":"full","layout":{"type":"constrained"}} /-->
	<!-- wp:post-terms {"term":"post_tag","className":"is-style-tw-outline-pill","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"textColor":"secondary","fontSize":"x-small"} /-->
	<!-- wp:pattern {"slug":"twentigone/comments-default"} /-->
	<!-- wp:pattern {"slug":"twentigone/post-navigation"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
