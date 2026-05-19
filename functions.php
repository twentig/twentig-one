<?php
/**
 * Twentig One functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twentig_One
 */

if ( ! function_exists( 'twentigone_support' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Enqueues editor styles, adds theme support for post formats,
	 * and registers the theme as a Twentig-compatible theme.
	 *
	 * @return void
	 */
	function twentigone_support() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';

		// Enqueue editor styles.
		add_editor_style( "style{$suffix}.css" );

		$editor_styles = array(
			'editor',
			'header-transparent',
		);

		if ( ! defined( 'TWENTIG_VERSION' ) ) {
			$editor_styles[] = 'twentig-standalone';
		}

		foreach ( $editor_styles as $style ) {
			add_editor_style( "assets/css/{$style}{$suffix}.css" );
		}

		// Define support for post formats.
		add_theme_support( 'post-formats', array( 'gallery', 'link', 'video', 'audio' ) );

		// Define as a twentig theme.
		add_theme_support( 'twentig-theme' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
endif;
add_action( 'after_setup_theme', 'twentigone_support' );

if ( ! function_exists( 'twentigone_override_block_styles' ) ) :
	/**
	 * Registers styles to override core block styles.
	 *
	 * @return void
	 */
	function twentigone_override_block_styles() {
		$suffix  = SCRIPT_DEBUG ? '' : '.min';
		$version = wp_get_theme( get_template() )->get( 'Version' );

		$override_blocks = array( 'file', 'latest-comments', 'paragraph', 'read-more' );
		if ( ! defined( 'TWENTIG_VERSION' ) ) {
			$override_blocks[] = 'columns';
		}

		foreach ( $override_blocks as $block_name ) {
			$src        = "assets/css/blocks/{$block_name}{$suffix}.css";
			wp_register_style(
				"wp-block-{$block_name}",
				get_parent_theme_file_uri( $src ),
				array(),
				$version
			);
			wp_style_add_data(
				"wp-block-{$block_name}",
				'path',
				get_parent_theme_file_path( $src )
			);
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'twentigone_override_block_styles', 9 );

if ( ! function_exists( 'twentigone_enqueue_block_styles' ) ) :
	/**
	 * Enqueues additional styles for core blocks.
	 *
	 * @return void
	 */
	function twentigone_enqueue_block_styles() {
		$suffix  = SCRIPT_DEBUG ? '' : '.min';
		$version = wp_get_theme( get_template() )->get( 'Version' );

		$styled_blocks = array(
			'button',
			'comments',
			'cover',
			'gallery',
			'media-text',
			'navigation',
			'navigation-submenu',
			'post-featured-image',
			'post-navigation-link',
			'post-template',
			'pullquote',
			'query-pagination',
			'quote',
			'search',
			'separator',
			'social-links',
			'table',
			'tag-cloud',
		);

		foreach ( $styled_blocks as $block_name ) {
			$src = "assets/css/blocks/{$block_name}{$suffix}.css";
			wp_enqueue_block_style(
				"core/$block_name",
				array(
					'handle' => "twentigone-$block_name",
					'src'    => get_theme_file_uri( $src ),
					'path'   => get_theme_file_path( $src ),
					'ver'    => $version,
				)
			);
		}
	}
endif;
add_action( 'init', 'twentigone_enqueue_block_styles' );

if ( ! function_exists( 'twentigone_scripts' ) ) :
	/**
	 * Enqueues scripts and styles.
	 *
	 * Loads theme stylesheet, common styles, JavaScript, and template-specific
	 * styles. Converts global style padding values to responsive clamp() values.
	 *
	 * @return void
	 */
	function twentigone_scripts() {
		$suffix  = SCRIPT_DEBUG ? '' : '.min';
		$version = wp_get_theme( get_template() )->get( 'Version' );

		// Enqueue theme stylesheet.
		$style_src = "style{$suffix}.css";
		wp_enqueue_style(
			'twentigone-style',
			get_parent_theme_file_uri( $style_src ),
			array(),
			$version
		);

		wp_style_add_data(
			'twentigone-style',
			'path',
			get_parent_theme_file_path( $style_src )
		);

		if ( ! defined( 'TWENTIG_VERSION' ) ) {
			$standalone_src = "assets/css/twentig-standalone{$suffix}.css";
			wp_enqueue_style(
				'twentig-standalone',
				get_parent_theme_file_uri( $standalone_src ),
				array(),
				$version
			);

			wp_style_add_data(
				'twentig-standalone',
				'path',
				get_parent_theme_file_path( $standalone_src )
			);
		}

		// Enqueue theme scripts.
		wp_enqueue_script(
			'twentigone-script',
			get_parent_theme_file_uri( "assets/js/theme{$suffix}.js" ),
			array(),
			$version,
			true
		);

		// Register transparent header style.
		$header_src = "assets/css/header-transparent{$suffix}.css";
		wp_register_style(
			'twentigone-header-transparent',
			get_parent_theme_file_uri( $header_src ),
			array(),
			$version
		);

		// Adds responsive side padding to global styles.
		$global_styles = wp_get_global_styles();
		$css_rules     = array();

		foreach ( array( 'left', 'right' ) as $side ) {
			$padding = $global_styles['spacing']['padding'][ $side ] ?? null;
			if ( $padding ) {
				$responsive_value = twentigone_responsive_padding( $padding );
				if ( $responsive_value ) {
					$css_rules[] = "--wp--style--root--padding-{$side}: {$responsive_value}";
				}
			}
		}

		if ( $css_rules ) {
			$global_css = 'body {' . implode( ';', $css_rules ) . ';}';
			wp_add_inline_style( 'global-styles', $global_css );
		}
	}
endif;
add_action( 'wp_enqueue_scripts', 'twentigone_scripts', 10 );

/**
 * Converts preset spacing values to responsive CSS clamp values.
 *
 * Takes a WordPress spacing preset value and converts it to a responsive
 * clamp() value for better mobile/tablet scaling on larger spacing values.
 *
 * @param string $value The spacing preset value.
 * @return string|null The clamp CSS value or null if not applicable.
 */
function twentigone_responsive_padding( $value ) {
	if ( ! is_string( $value ) || ! preg_match( '/^var\(--wp--preset--spacing--(\d+)\)$/', $value, $matches ) ) {
		return null;
	}

	$preset_number = intval( $matches[1] );

	if ( $preset_number > 15 ) {
		return 'clamp(16px, 4.166667vw, ' . $value . ')';
	}

	return null;
}

if ( ! function_exists( 'twentigone_register_block_styles' ) ) :
	/**
	 * Register custom block styles.
	 *
	 * @return void
	 */
	function twentigone_register_block_styles() {

		register_block_style(
			'core/button',
			array(
				'name'  => 'tw-link',
				'label' => __( 'Link', 'twentig-one' ),
			)
		);

		if ( ! defined( 'TWENTIG_VERSION' ) ) {
			register_block_style(
				'core/post-navigation-link',
				array(
					'name'  => 'tw-nav-stack',
					'label' => __( 'Stack', 'twentig-one' ),
				)
			);

			register_block_style(
				'core/post-terms',
				array(
					'name'  => 'tw-outline-pill',
					'label' => __( 'Pill', 'twentig-one' ),
				)
			);
		}
	}
endif;
add_action( 'init', 'twentigone_register_block_styles' );

if ( ! function_exists( 'twentigone_block_editor_scripts' ) ) :
	/**
	 * Enqueues block editor scripts.
	 *
	 * @return void
	 */
	function twentigone_block_editor_scripts() {
		$version = wp_get_theme( get_template() )->get( 'Version' );
		wp_enqueue_script(
			'twentigone-block-editor',
			get_parent_theme_file_uri( 'assets/js/block-editor.js' ),
			array( 'wp-blocks', 'wp-dom-ready' ),
			$version,
			true
		);
	}
endif;
add_action( 'enqueue_block_editor_assets', 'twentigone_block_editor_scripts' );

/**
 * Filters the template part block output for transparent header support.
 *
 * Enqueues transparent header styles and injects SVG filter for logo color
 * replacement when the header-transparent class is detected.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function twentigone_filter_template_part_block( $block_content, $block ) {
	if ( ( $block['attrs']['tagName'] ?? null ) !== 'header'
		|| ! str_contains( $block_content, 'header-transparent' ) ) {
		return $block_content;
	}

	wp_enqueue_style( 'twentigone-header-transparent' );

	if ( str_contains( $block_content, 'site-logo' ) || is_customize_preview() ) {
		add_action( 'wp_body_open', 'twentigone_output_logo_svg_filter' );
	}

	return $block_content;
}
add_filter( 'render_block_core/template-part', 'twentigone_filter_template_part_block', 10, 2 );

/**
 * Adds transparent header assets to the block editor.
 *
 * Injects the SVG filter for logo color replacement and the filter CSS rule
 * as inline styles to avoid WordPress URL rewriting in the editor iframe.
 *
 * @param array $settings Default editor settings.
 * @return array Filtered editor settings.
 */
function twentigone_add_transparent_header_editor_assets( $settings ) {
	if ( ! isset( $settings['styles'] ) ) {
		$settings['styles'] = array();
	}

	$settings['styles'][] = array(
		'assets'         => twentigone_get_logo_svg_filter(),
		'__unstableType' => 'svgs',
		'isGlobalStyles' => false,
	);

	$settings['styles'][] = array(
		'css'            => 'html:not(.has-modal-open) .header-transparent:not(.tw-header-opaque) .wp-block-site-logo:not(.logo-no-filter):not(.is-style-rounded) img { filter: url(#tw-logo-color) drop-shadow(0 0 0 color-mix(in srgb, var(--tw-header-transparent-color) 0%, transparent)); }',
		'isGlobalStyles' => false,
	);

	return $settings;
}
add_filter( 'block_editor_settings_all', 'twentigone_add_transparent_header_editor_assets' );

/**
 * Returns SVG filter for transparent header logo color replacement.
 *
 * @return string SVG markup.
 */
function twentigone_get_logo_svg_filter() {
	$svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow:hidden;">
		<filter id="tw-logo-color" color-interpolation-filters="sRGB" x="0" y="0" width="1" height="1" filterUnits="objectBoundingBox" filterRes="1024 1024">
			<feFlood flood-color="var(--tw-header-transparent-color)" result="flood"/>
			<feComposite in="flood" in2="SourceAlpha" operator="in" result="tinted"/>
			<feMerge>
				<feMergeNode in="tinted"/>
			</feMerge>
		</filter>
	</svg>';

	// Clean up the whitespace.
	$svg = preg_replace( '/[\r\n\t ]+/', ' ', $svg );
	$svg = str_replace( '> <', '><', $svg );

	return $svg;
}

/**
 * Outputs SVG filter for transparent header logo color replacement.
 *
 * @return void
 */
function twentigone_output_logo_svg_filter() {
	// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Hardcoded SVG filter definition.
	echo twentigone_get_logo_svg_filter();
}

/**
 * Filters queried block templates to remove portfolio templates.
 *
 * Removes portfolio-related templates from the query when the portfolio
 * post type is not registered.
 *
 * @param WP_Block_Template[] $query_result Array of found block templates.
 * @return WP_Block_Template[] Filtered array of block templates.
 */
function twentigone_filter_portfolio_templates( $query_result ) {
	if ( post_type_exists( 'portfolio' ) ) {
		return $query_result;
	}

	$portfolio_templates = array(
		'single-portfolio',
		'archive-portfolio',
		'taxonomy-portfolio_category',
		'taxonomy-portfolio_tag',
	);

	return array_values(
		array_filter(
			$query_result,
			function ( $template ) use ( $portfolio_templates ) {
				return ! in_array( $template->slug, $portfolio_templates, true );
			}
		)
	);
}
add_filter( 'get_block_templates', 'twentigone_filter_portfolio_templates' );

/**
 * Adds the portfolio archive template as a fallback for portfolio taxonomy templates.
 *
 * Twentig One uses a single archive-portfolio.html template for all portfolio
 * archives. This lets portfolio category and tag archives use that template
 * when taxonomy-specific templates are not present.
 *
 * @param string[] $templates Template hierarchy.
 * @return string[] Modified template hierarchy.
 */
function twentigone_portfolio_taxonomy_template_fallback( $templates ) {
	if ( ! is_tax( array( 'portfolio_category', 'portfolio_tag' ) ) ) {
		return $templates;
	}

	$fallback = 'archive-portfolio.php';
	$slugs    = array(
		'taxonomy-portfolio_category',
		'taxonomy-portfolio_tag',
	);

	foreach ( $slugs as $slug ) {
		$index = array_search( $slug . '.php', $templates, true );

		if ( false !== $index ) {
			if ( ! in_array( $fallback, $templates, true ) ) {
				array_splice( $templates, $index + 1, 0, $fallback );
			}

			break;
		}
	}

	return $templates;
}
add_filter( 'taxonomy_template_hierarchy', 'twentigone_portfolio_taxonomy_template_fallback', 1 );

/**
 * Prevents custom overlay submenus that open on click from closing on focusout.
 *
 * Keeps submenu toggle clicks working reliably, while preserving Core's
 * focusout behavior outside the custom overlay.
 *
 * @param string $block_content Navigation block markup.
 * @return string Filtered markup.
 */
function twentigone_disable_overlay_submenu_focusout_close( $block_content ) {
	if ( ! str_contains( $block_content, 'disable-default-overlay' )
		|| ! str_contains( $block_content, 'open-on-click' )
	) {
		return $block_content;
	}

	$overlay_start = strpos( $block_content, 'wp-block-navigation__overlay-container' );

	if ( false === $overlay_start ) {
		return $block_content;
	}

	$before_overlay = substr( $block_content, 0, $overlay_start );
	$overlay_markup = substr( $block_content, $overlay_start );

	$overlay_markup = str_replace(
		' data-wp-on--focusout="actions.handleMenuFocusout"',
		'',
		$overlay_markup
	);

	return $before_overlay . $overlay_markup;
}
add_filter( 'render_block_core/navigation', 'twentigone_disable_overlay_submenu_focusout_close', 20 );

/**
 * Filters the HTML output for the protected post password form.
 *
 * @param string $output The password form HTML output.
 * @return string Modified password form HTML.
 */
function twentigone_password_form( $output ) {
	// Wrap label text in screen-reader-text span.
	$output = preg_replace(
		'/(<label for="[^"]+">)([^<]*)(<input)/',
		'$1<span class="password-label screen-reader-text">$2</span>$3',
		$output
	);

	// Add button styling class to submit input.
	return str_replace( '<input type="submit"', '<input class="wp-element-button" type="submit"', $output );
}
add_filter( 'the_password_form', 'twentigone_password_form' );

/**
 * Filters the post featured image block output for post formats.
 *
 * Handles special display logic for gallery, video, and audio post formats.
 * Can show format icons or replace the featured image with format media content.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function twentigone_filter_post_featured_image_block( $block_content, $block ) {
	$format = get_post_format();

	if ( ! in_array( $format, array( 'gallery', 'audio', 'video' ), true ) ) {
		return $block_content;
	}

	$use_media        = str_contains( $block_content, 'has-format-media' );
	$show_format_icon = str_contains( $block_content, 'has-format-icon' );

	if ( ! $use_media && ! $show_format_icon ) {
		return $block_content;
	}

	$format_blocks = array(
		'gallery' => array( 'core/gallery' ),
		'video'   => array( 'core/embed', 'core/video' ),
		'audio'   => array( 'core/embed', 'core/audio' ),
	);

	$format_icons = array(
		'gallery' => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M19 6.75v7.5A1.75 1.75 0 0 1 17.25 16h-7.5A1.75 1.75 0 0 1 8 14.25v-7.5C8 5.784 8.784 5 9.75 5h7.5c.966 0 1.75.784 1.75 1.75ZM14.125 17H7V9.875A.875.875 0 0 0 6.125 9h-.25A.875.875 0 0 0 5 9.875v7.375c0 .966.784 1.75 1.75 1.75h7.375a.875.875 0 0 0 .875-.875v-.25a.875.875 0 0 0-.875-.875Z"></path></svg>',
		'video'   => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M8 19V5l11 7z"></path></svg>',
		'audio'   => '<svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" aria-hidden="true" focusable="false"><path d="M20 12v6.25A1.75 1.75 0 0 1 18.25 20h-1.5A1.75 1.75 0 0 1 15 18.25v-3.5c0-.966.784-1.75 1.75-1.75H18v-1a6 6 0 1 0-12 0v1h1.25c.966 0 1.75.784 1.75 1.75v3.5A1.75 1.75 0 0 1 7.25 20h-1.5A1.75 1.75 0 0 1 4 18.25V12a8 8 0 0 1 16 0Z"></path></svg>',
	);

	$format_content   = '';
	$found_block_name = '';

	if ( $use_media ) {
		$post = get_post();
		if ( ! $post ) {
			return $block_content;
		}

		// Quick check: does the content contain any of the blocks we're looking for?
		$contains_format_block = false;
		foreach ( $format_blocks[ $format ] as $block_name ) {
			if ( has_block( $block_name, $post->post_content ) ) {
				$contains_format_block = true;
				break;
			}
		}

		if ( ! $contains_format_block ) {
			return $block_content;
		}

		$blocks = parse_blocks( $post->post_content );
		if ( empty( $blocks ) ) {
			return $block_content;
		}

		// On single posts, only look at the first block.
		if ( is_singular() ) {
			$blocks = array( $blocks[0] );
		}

		foreach ( $blocks as $content_block ) {
			if ( in_array( $content_block['blockName'], $format_blocks[ $format ], true ) ) {
				$format_content   = render_block( $content_block );
				$found_block_name = $content_block['blockName'];

				// Embed blocks need autoembed processing to convert URLs to actual embeds.
				if ( 'core/embed' === $found_block_name ) {
					global $wp_embed;
					$format_content = $wp_embed->autoembed( $format_content );
				}

				break;
			}
		}
	} elseif ( $block_content && isset( $format_icons[ $format ] ) ) {
		return str_replace( '</figure>', $format_icons[ $format ] . '</figure>', $block_content );
	} else {
		return $block_content;
	}

	// De-duplicate: Hide the media block from content if showing it as featured image.
	if ( is_singular() && $found_block_name ) {
		add_filter( "render_block_{$found_block_name}", function ( $block_content, $block ) {
			static $removed = false;
			if ( $removed ) {
				return $block_content;
			}
			$removed = true;
			return '';
		}, 10, 2 );
	}

	if ( $format_content ) {
		$tag_processor = new WP_HTML_Tag_Processor( $format_content );
		if ( $tag_processor->next_tag( 'figure' ) ) {
			$styles_to_add = array();
			$margin_top    = $block['attrs']['style']['spacing']['margin']['top'] ?? null;
			$margin_bottom = $block['attrs']['style']['spacing']['margin']['bottom'] ?? null;

			foreach ( array( 'margin-top' => $margin_top, 'margin-bottom' => $margin_bottom ) as $property => $value ) {
				if ( is_string( $value ) && '' !== $value ) {
					if ( str_contains( $value, 'var:preset|spacing|' ) ) {
						$slug            = strtolower( str_replace( 'var:preset|spacing|', '', $value ) );
						$styles_to_add[] = "{$property}: var(--wp--preset--spacing--{$slug})";
					} else {
						$styles_to_add[] = "{$property}: {$value}";
					}
				}
			}

			if ( ! empty( $styles_to_add ) ) {
				$existing_style = $tag_processor->get_attribute( 'style' );
				$new_style      = implode( '; ', $styles_to_add ) . ';';

				if ( $existing_style ) {
					$new_style .= ' ' . $existing_style;
				}

				$tag_processor->set_attribute( 'style', $new_style );
			}

			$format_content = $tag_processor->get_updated_html();
		}
		return $format_content;
	}

	return $block_content;
}
add_filter( 'render_block_core/post-featured-image', 'twentigone_filter_post_featured_image_block', 10, 2 );

/**
 * Filters the post title block output for link post format.
 *
 * On archive pages, extracts the first URL from post content and updates
 * the post title link to point to that external URL. Adds an external link
 * icon to indicate the link opens in a new window.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function twentigone_filter_post_title_block( $block_content, $block ) {
	if ( is_singular() || 'link' !== get_post_format() ) {
		return $block_content;
	}

	$post = get_post();
	if ( ! $post ) {
		return $block_content;
	}

	$link = get_url_in_content( $post->post_content );
	if ( ! $link ) {
		return $block_content;
	}

	$tag_processor = new WP_HTML_Tag_Processor( $block_content );
	if ( ! $tag_processor->next_tag( 'a' ) ) {
		return $block_content;
	}

	$tag_processor->set_attribute( 'href', esc_url( $link ) );
	$tag_processor->set_attribute( 'target', '_blank' );
	$tag_processor->set_attribute( 'rel', 'noopener noreferrer' );
	$tag_processor->add_class( 'external-link' );
	$block_content = $tag_processor->get_updated_html();
	$icon          = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M8 6v2h6.6L6 16.6 7.4 18 16 9.4V16h2V6H8z"></path></svg><span class="screen-reader-text">' . esc_html__( 'opens in a new tab', 'twentig-one' ) . '</span>';
	return str_replace( '</a>', $icon . '</a>', $block_content );
}
add_filter( 'render_block_core/post-title', 'twentigone_filter_post_title_block', 10, 2 );

/**
 * Filters the post excerpt block output for link post format.
 *
 * Hides the excerpt if it only contains a URL for posts using the link format.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function twentigone_filter_post_excerpt_block( $block_content, $block ) {
	if ( 'link' !== get_post_format() || empty( $block_content ) ) {
		return $block_content;
	}

	// Hide excerpt if it only contains a URL.
	$excerpt = trim( get_the_excerpt() );
	if ( wp_http_validate_url( $excerpt ) ) {
		return '';
	}

	return $block_content;
}
add_filter( 'render_block_core/post-excerpt', 'twentigone_filter_post_excerpt_block', 10, 2 );

/**
 * Filters the search block output to disable autocomplete.
 *
 * Adds autocomplete="off" attribute to the search input field.
 *
 * @param string $block_content The block content.
 * @param array  $block         The full block, including name and attributes.
 * @return string Modified block content.
 */
function twentigone_filter_search_block( $block_content, $block ) {
	$tag_processor = new WP_HTML_Tag_Processor( $block_content );

	if ( $tag_processor->next_tag(
		array(
			'tag_name'   => 'input',
			'class_name' => 'wp-block-search__input',
		)
	) ) {
		$tag_processor->set_attribute( 'autocomplete', 'off' );
		return $tag_processor->get_updated_html();
	}

	return $block_content;
}
add_filter( 'render_block_core/search', 'twentigone_filter_search_block', 10, 2 );

/**
 * Sets up pattern categories and manages portfolio patterns.
 *
 * Registers the 'Utilities' pattern category and unregisters portfolio
 * patterns when the portfolio post type is not registered.
 *
 * @return void
 */
function twentigone_setup_patterns() {
	register_block_pattern_category(
		'utilities',
		array(
			'label' => _x( 'Utilities', 'Block pattern category', 'twentig-one' ),
		)
	);

	if ( post_type_exists( 'portfolio' ) ) {
		return;
	}

	$portfolio_patterns = array(
		'twentigone/portfolio-loop-1-2-column',
		'twentigone/portfolio-loop-1-column',
		'twentigone/portfolio-loop-1-column-cover',
		'twentigone/portfolio-loop-2-column-covers',
		'twentigone/portfolio-loop-3-column',
		'twentigone/portfolio-loop-3-column-cards',
		'twentigone/portfolio-loop-alt-side-by-side',
		'twentigone/portfolio-loop-default',
		'twentigone/portfolio-loop-offset',
		'twentigone/related-projects',
		'twentigone/related-projects-1-2-column',
		'twentigone/related-projects-1-column',
		'twentigone/related-projects-1-column-cover',
		'twentigone/related-projects-2-column-covers',
		'twentigone/related-projects-3-column',
		'twentigone/related-projects-3-column-cards',
	);

	foreach ( $portfolio_patterns as $pattern_slug ) {
		unregister_block_pattern( $pattern_slug );
	}

}
add_action( 'init', 'twentigone_setup_patterns', 20 );

/**
 * Adds theme-specific CSS classes to Twentig's block class library.
 *
 * @param array $classes Array holding additional classes.
 * @return array Modified array of classes.
 */
function twentigone_twentig_filter_block_classes( $classes ) {
	$classes['core/navigation']['scroll-smooth']             = __( 'Enable smooth scroll.', 'twentig-one' );
	$classes['core/navigation']['overlay-center']            = __( 'Align overlay content to the center.', 'twentig-one' );
	$classes['core/post-featured-image']['has-format-icon']  = __( 'Show post format icon.', 'twentig-one' );
	$classes['core/post-featured-image']['has-format-media'] = __( 'Show post format media (gallery, video, audio).', 'twentig-one' );
	$classes['core/template-part']['header-transparent']     = __( 'Make the header transparent.', 'twentig-one' );
	$classes['core/site-logo']['no-filter']                  = __( 'Keep original logo colors on transparent header.', 'twentig-one' );
	return $classes;
}
add_filter( 'twentig_block_classes', 'twentigone_twentig_filter_block_classes', 9 );

if ( ! function_exists( 'twentigone_block_default_controls' ) ) :
	/**
	 * Sets default editor controls for core blocks.
	 *
	 * @param array $metadata Metadata for registering a block type.
	 * @return array Filtered metadata.
	 */
	function twentigone_block_default_controls( $metadata ) {
		if ( empty( $metadata['name'] ) ) {
			return $metadata;
		}

		$block_name = $metadata['name'];

		$spacing_blocks = array(
			'core/heading',
			'core/paragraph',
			'core/list',
			'core/table',
			'core/gallery',
		);

		$border_blocks = array(
			'core/group',
			'core/image',
			'core/cover',
			'core/columns',
			'core/column',
			'core/post-featured-image',
			'core/button',
		);

		$is_spacing_block = in_array( $block_name, $spacing_blocks, true );
		$is_border_block  = in_array( $block_name, $border_blocks, true );

		if ( ! $is_spacing_block && ! $is_border_block ) {
			return $metadata;
		}

		if ( $is_spacing_block ) {
			$metadata['supports']['spacing']['__experimentalDefaultControls'] = array(
				'margin'  => true,
				'padding' => false,
			);
		}

		if ( $is_border_block ) {
			$metadata['supports']['__experimentalBorder']['__experimentalDefaultControls'] = array(
				'color'  => true,
				'style'  => true,
				'width'  => true,
				'radius' => true,
				'shadow' => true,
			);
		}

		if ( 'core/paragraph' === $block_name ) {
			$metadata['supports']['typography']['__experimentalDefaultControls'] = array(
				'fontSize'   => true,
				'lineHeight' => true,
			);
		}

		return $metadata;
	}
endif;
add_filter( 'block_type_metadata', 'twentigone_block_default_controls' );

/**
 * Defines starter page types for Twentig plugin integration.
 *
 * @return array Array of page types with titles.
 */
function twentigone_starter_pages() {
	$page_types = array(
		'home' => array(
			'title' => __( 'Home', 'twentig-one' ),
		),
		'about' => array(
			'title' => __( 'About', 'twentig-one' ),
		),
		'services' => array(
			'title' => __( 'Services', 'twentig-one' ),
		),
		'blog' => array(
			'title' => __( 'Blog', 'twentig-one' ),
		),
		'portfolio' => array(
			'title' => __( 'Portfolio', 'twentig-one' ),
		),
		'work' => array(
			'title' => __( 'Work', 'twentig-one' ),
		),
		'gallery' => array(
			'title' => __( 'Gallery', 'twentig-one' ),
		),
		'info' => array(
			'title' => __( 'Info', 'twentig-one' ),
		),
		'company' => array(
			'title' => __( 'Company', 'twentig-one' ),
		),
		'contact' => array(
			'title' => __( 'Contact', 'twentig-one' ),
		),
	);
	return $page_types;
}
add_filter( 'twentig_page_types', 'twentigone_starter_pages' );

/* Welcome notice */
require_once get_template_directory() . '/inc/welcome-notice.php';

/* GitHub Updater */
require_once get_template_directory() . '/plugin-update-checker/plugin-update-checker.php';

$update_checker = \YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
	'https://twentig.com/updates/twentig-one',
	get_template_directory() . '/style.css',
	'twentig-one',
	24
);

$update_checker->addQueryArgFilter( '__return_empty_array' );
