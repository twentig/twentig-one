<?php
/**
 * Title: Related projects: 3-column cards
 * Slug: twentigone/related-projects-3-column-cards
 * Categories: utilities
 * Post Types: wp_template
 */

?>

<!-- wp:group {"metadata":{"name":"Related"},"className":"related-section","align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull related-section" style="margin-top:var(--wp--preset--spacing--70)">
	<!-- wp:pattern {"slug":"twentigone/hidden-portfolio-related-heading"} /-->
	<!-- wp:query {"query":{"perPage":3,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"twSinglePostsFilter":"same-category"},"namespace":"twentig/portfolio-list","align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":3},"className":"tw-md-columns-2"} -->
			<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","twStretchedLink":true} -->
			<div class="wp-block-group has-base-2-background-color has-background tw-stretched-link" style="min-height:100%">
				<!-- wp:post-featured-image {"aspectRatio":"3/2","sizeSlug":"large","useFirstImageFromPost":true,"twHover":"zoom"} /-->
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}}} -->
				<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
					<!-- wp:post-title {"level":3,"isLink":true,"className":"tw-link-no-underline","fontSize":"medium"} /-->
					<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"textColor":"secondary","twShowManualOnly":true} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
