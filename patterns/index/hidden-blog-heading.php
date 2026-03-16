<?php
/**
 * Title: Blog heading
 * Slug: twentigone/hidden-blog-heading
 * Categories: utilities
 * Inserter: false
 */

$page_for_posts = (int) get_option( 'page_for_posts' );
$heading_text = $page_for_posts ? get_the_title( $page_for_posts ) : __( 'Blog', 'twentig-one' );

?>

<!-- wp:group {"metadata":{"name":"<?php esc_html_e( 'Hero', 'twentig-one' ); ?>"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|65","bottom":"var:preset|spacing|65"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--65);padding-bottom:var(--wp--preset--spacing--65)">
	<!-- wp:heading {"textAlign":"center","level":1} -->
	<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html( $heading_text ); ?></h1>
	<!-- /wp:heading -->
</div>
<!-- /wp:group -->
