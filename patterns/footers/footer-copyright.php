<?php
/**
 * Title: Footer: copyright only
 * Slug: twentigone/footer-copyright
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template_part
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">
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
</div>
<!-- /wp:group -->
