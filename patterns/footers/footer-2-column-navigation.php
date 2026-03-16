<?php
/**
 * Title: Footer: 2-column navigation
 * Slug: twentigone/footer-2-column-navigation
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template_part
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:social-links {"className":"is-style-logos-only footer-social","twHover":"opacity-down"} -->
			<ul class="wp-block-social-links is-style-logos-only footer-social tw-hover-opacity-down">
				<!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"width":"400px"} -->
		<div class="wp-block-column" style="flex-basis:400px">
			<!-- wp:columns {"isStackedOnMobile":false} -->
			<div class="wp-block-columns is-not-stacked-on-mobile">
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"twHoverStyle":"opacity-down","twActiveStyle":"none"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Mission', 'twentig-one' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Press & Media', 'twentig-one' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Testimonials', 'twentig-one' ); ?>","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->
				<!-- wp:column -->
				<div class="wp-block-column">
					<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|15"}},"fontSize":"small","layout":{"type":"flex","orientation":"vertical"},"twHoverStyle":"opacity-down","twActiveStyle":"none"} -->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Newsletter', 'twentig-one' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'FAQs', 'twentig-one' ); ?>","url":"#"} /-->
						<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'twentig-one' ); ?>","url":"#"} /-->
					<!-- /wp:navigation -->
				</div>
				<!-- /wp:column -->
			</div>
			<!-- /wp:columns -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"flex"}} -->
	<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:paragraph {"fontSize":"x-small"} -->
		<p class="has-x-small-font-size">
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
</div>
<!-- /wp:group -->
