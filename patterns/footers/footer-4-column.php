<?php
/**
 * Title: Footer: 4-column with headings
 * Slug: twentigone/footer-4-column
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template_part
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}},"twStack":"md-2"} -->
	<div class="wp-block-columns alignwide tw-cols-stack-md-2">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="wp-block-heading has-normal-font-size"><?php esc_html_e( 'Explore', 'twentig-one' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Mission', 'twentig-one' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Press & Media', 'twentig-one' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Testimonials', 'twentig-one' ); ?>","url":"#"} /-->
			<!-- /wp:navigation -->
			</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="wp-block-heading has-normal-font-size"><?php esc_html_e( 'Resources', 'twentig-one' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Help', 'twentig-one' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'twentig-one' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Newsletter', 'twentig-one' ); ?>","url":"#"} /-->
				<!-- /wp:navigation -->
			</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="wp-block-heading has-normal-font-size"><?php esc_html_e( 'Legal', 'twentig-one' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"}} -->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'twentig-one' ); ?>","url":"#"} /-->
				<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Terms of use', 'twentig-one' ); ?>","url":"#"} /-->
			<!-- /wp:navigation -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"fontSize":"normal"} -->
				<h2 class="wp-block-heading has-normal-font-size"><?php esc_html_e( 'Location', 'twentig-one' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php esc_html_e( '123 Main Street', 'twentig-one' ); ?><br><?php esc_html_e( 'New York, NY 10001', 'twentig-one' ); ?><br>(212) 555-0150</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--60)">
		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.4"}},"textColor":"secondary","fontSize":"x-small"} -->
		<p class="has-secondary-color has-text-color has-x-small-font-size" style="line-height:1.4">
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
		<!-- wp:social-links {"className":"is-style-logos-only footer-social","twHover":"opacity-down"} -->
		<ul class="wp-block-social-links is-style-logos-only footer-social tw-hover-opacity-down">
			<!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /-->
		</ul>
		<!-- /wp:social-links -->
		</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
