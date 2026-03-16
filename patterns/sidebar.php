<?php
/**
 * Title: Sidebar content
 * Slug: twentigone/sidebar
 * Categories: utilities
 * Inserter: false
 */

?>

<!-- wp:group {"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size">
	<!-- wp:separator {"className":"is-style-wide tw-lg-hidden","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|65"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide tw-lg-hidden" style="margin-bottom:var(--wp--preset--spacing--65)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px"}}},"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size" style="margin-top:0px"><?php esc_html_e( 'About', 'twentig-one' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'You might be an artist who would like to introduce yourself and your work here or maybe you are a business with a mission to describe.', 'Theme starter content', 'default' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Latest posts', 'twentig-one' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[],"twFilterCurrent":"exclude-current"}} -->
	<div class="wp-block-query">
		<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|15"}}} -->
		 	<!-- wp:post-title {"level":0,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
		<!-- /wp:post-template -->
	</div>
	<!-- /wp:query -->

	<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"fontSize":"medium"} -->
	<h2 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--40)"><?php esc_html_e( 'Categories', 'twentig-one' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:categories {"className":"tw-link-hover-underline tw-list-spacing-medium tw-no-bullet"} /--></div>
<!-- /wp:group -->
