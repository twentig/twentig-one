<?php
/**
 * Title: Footer: simple with navigation
 * Slug: twentigone/footer-simple-navigation
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template_part
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"fontSize":"small"} -->
		<p class="has-small-font-size" style="line-height:1.4">
		<?php
			printf(
				/* translators: 1: Year, 2: Site name, 3: Opening anchor tag for Twentig, 4: Closing anchor tag */
				esc_html__( '© %1$s %2$s. Made with %3$sTwentig%4$s.', 'twentig-one' ),
				esc_html( gmdate( 'Y' ) ),
				esc_html( get_bloginfo( 'name' ) ),
				'<a href="https://twentig.com">',
				'</a>'
			);
			?>
		</p>
		<!-- /wp:paragraph -->
		<!-- wp:navigation {"overlayMenu":"never","fontSize":"small"} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Newsletter', 'twentig-one' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'twentig-one' ); ?>","url":"#"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
