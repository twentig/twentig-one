<?php
/**
 * Title: Footer: site title with description
 * Slug: twentigone/footer-with-description
 * Categories: footer
 * Block Types: core/template-part/footer
 * Post Types: wp_template_part
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}}},"backgroundColor":"base"} -->
<div class="wp-block-group has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--50)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|35","left":"8%"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"440px"} -->
		<div class="wp-block-column" style="flex-basis:440px">
			<!-- wp:site-title {"level":0} /-->
			<!-- wp:paragraph {"className":"tw-text-pretty","fontSize":"small"} -->
			<p class="tw-text-pretty has-small-font-size"><?php echo esc_html_x( 'This may be a good place to introduce yourself and your site or include some credits.', 'Theme starter content', 'default' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:social-links {"className":"is-style-logos-only footer-social tw-sm-justify-start","layout":{"type":"flex","justifyContent":"right"},"twHover":"opacity-down"} -->
			<ul class="wp-block-social-links is-style-logos-only footer-social tw-sm-justify-start tw-hover-opacity-down">
				<!-- wp:social-link {"url":"#","service":"instagram"} /--><!-- wp:social-link {"url":"#","service":"linkedin"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
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
		<!-- wp:navigation {"overlayMenu":"never","textColor":"secondary","fontSize":"x-small"} -->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Newsletter', 'twentig-one' ); ?>","url":"#"} /-->
			<!-- wp:navigation-link {"label":"<?php esc_html_e( 'Privacy', 'twentig-one' ); ?>","url":"#"} /-->
		<!-- /wp:navigation -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
