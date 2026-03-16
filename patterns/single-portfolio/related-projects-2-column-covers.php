<?php
/**
 * Title: Related projects: 2-column covers
 * Slug: twentigone/related-projects-2-column-covers
 * Categories: utilities
 * Post Types: wp_template
 */

?>

<!-- wp:group {"metadata":{"name":"Related"},"className":"related-section","align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull related-section" style="margin-top:var(--wp--preset--spacing--70)">
	<!-- wp:pattern {"slug":"twentigone/hidden-portfolio-related-heading"} /-->
	<!-- wp:query {"query":{"perPage":2,"offset":0,"postType":"portfolio","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"twSinglePostsFilter":"same-category"},"namespace":"twentig/portfolio-list","align":"wide"} -->
	<div class="wp-block-query alignwide">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
			<!-- wp:cover {"useFeaturedImage":true,"isUserOverlayColor":true,"customGradient":"linear-gradient(0deg,rgba(0,0,0,0) 20%,rgba(0,0,0,0.7) 100%)","contentPosition":"top left","style":{"spacing":{"padding":{"top":"var:preset|spacing|25","right":"var:preset|spacing|25","bottom":"var:preset|spacing|25","left":"var:preset|spacing|25"}},"dimensions":{"aspectRatio":"4/3"}},"twStretchedLink":true,"twHover":"show-text"} -->
			<div class="wp-block-cover has-custom-content-position is-position-top-left tw-stretched-link tw-hover-show-text" style="padding-top:var(--wp--preset--spacing--25);padding-right:var(--wp--preset--spacing--25);padding-bottom:var(--wp--preset--spacing--25);padding-left:var(--wp--preset--spacing--25)">
				<span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim has-background-gradient" style="background:linear-gradient(0deg,rgba(0,0,0,0) 20%,rgba(0,0,0,0.7) 100%)"></span>
				<div class="wp-block-cover__inner-container">
					<!-- wp:post-title {"level":3,"isLink":true,"className":"tw-link-no-underline","fontSize":"large"} /-->
					<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.3"}},"twShowManualOnly":true} /-->
				</div>
			</div>
			<!-- /wp:cover -->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->
</div>
<!-- /wp:group -->
