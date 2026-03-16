<?php
/**
 * Title: 404 content
 * Slug: twentigone/hidden-404
 * Categories: utilities
 * Inserter: false
 */
?>

<!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center">
	<?php echo esc_html_x( 'The page you’re looking for can’t be found.', 'Message to convey that a webpage could not be found', 'twentig-one' ); ?>
</h1>
<!-- /wp:heading -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
	<!-- wp:button -->
	<div class="wp-block-button">
		<a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url() ); ?>"><?php esc_html_e( 'Home', 'twentig-one' ); ?></a>
	</div>
	<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
