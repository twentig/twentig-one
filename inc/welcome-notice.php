<?php
/**
 * Admin notice for Twentig plugin recommendation.
 *
 * @package Twentig_One
 */

/**
 * Checks if the Twentig notice should be displayed.
 *
 * @return bool True if notice should be shown, false otherwise.
 */
function twentigone_should_show_notice() {
	if ( ! current_user_can( 'install_plugins' ) ) {
		return false;
	}

	if ( defined( 'TWENTIG_VERSION' ) && version_compare( TWENTIG_VERSION, '2.0', '>=' ) ) {
		return false;
	}

	if ( get_user_meta( get_current_user_id(), '_twentig_one_install_plugin_notice', true ) ) {
		return false;
	}

	$screen = get_current_screen();
	if ( isset( $screen->parent_file ) && 'plugins.php' === $screen->parent_file && 'update' === $screen->id ) {
		return false;
	}

	return true;
}

/**
 * Show admin notice if Twentig isn't active or is outdated.
 *
 * Displays a dismissible admin notice recommending the Twentig plugin
 * with install, activate, or update button depending on plugin status.
 *
 * @return void
 */
function twentigone_render_plugin_notice() {

	if ( ! twentigone_should_show_notice() ) {
		return;
	}

	$plugin    = 'twentig/twentig.php';
	$plugins   = get_plugins();
	$installed = isset( $plugins[ $plugin ] );
	$outdated  = $installed && version_compare( $plugins[ $plugin ]['Version'], '2.0', '<' );

	if ( $outdated ) {
		$button_text = __( 'Update Twentig', 'twentig-one' );
		$button_link = wp_nonce_url( self_admin_url( 'update.php?action=upgrade-plugin&plugin=' . $plugin ), 'upgrade-plugin_' . $plugin );
	} elseif ( $installed ) {
		$button_text = __( 'Activate Twentig', 'twentig-one' );
		$button_link = wp_nonce_url( self_admin_url( 'plugins.php?action=activate&plugin=' . $plugin ), 'activate-plugin_' . $plugin );
	} else {
		$button_text = __( 'Install Twentig', 'twentig-one' );
		$button_link = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=twentig' ), 'install-plugin_twentig' );
	}

	add_action( 'admin_footer', 'twentigone_notice_script' );

	?>
	<div class="notice notice-info is-dismissible twentigone-notice-container">
		<div class="twentigone-notice-logo">
			<svg viewBox="0 0 24 24" width="24" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
				<path d="M24 6.647c0-.241 0-.483-.01-.724a10.5 10.5 0 0 0-.14-1.576 5.3 5.3 0 0 0-.493-1.5 5.04 5.04 0 0 0-2.2-2.2 5.3 5.3 0 0 0-1.5-.493 10.5 10.5 0 0 0-1.577-.14Q17.716 0 17.354 0H6.648c-.241 0-.483 0-.724.01a11 11 0 0 0-1.576.14 5.3 5.3 0 0 0-1.5.494 5.04 5.04 0 0 0-2.2 2.2 5.3 5.3 0 0 0-.493 1.5 10 10 0 0 0-.142 1.578q-.012.362-.013.725v10.705c0 .242 0 .483.011.725a10.4 10.4 0 0 0 .139 1.576 5.3 5.3 0 0 0 .493 1.5 5.04 5.04 0 0 0 2.2 2.2 5.3 5.3 0 0 0 1.5.494 10.4 10.4 0 0 0 1.576.138q.362.01.724.012H17.35c.241 0 .482 0 .723-.011a10.4 10.4 0 0 0 1.577-.138 5.3 5.3 0 0 0 1.5-.494 5.05 5.05 0 0 0 2.2-2.2 5.3 5.3 0 0 0 .493-1.5 10.6 10.6 0 0 0 .14-1.576c0-.242.009-.484.01-.725V6.647Z"/><path d="M9.278 10.734 11.52 17h1.424l1.876-5.186L16.7 17h1.44L21 9h-1.925l-1.666 5.186L15.548 9h-1.456l-1.844 5.186L10.582 9H6.316V6.857H4.521V9H3v1.734h1.521v3.272A2.838 2.838 0 0 0 7.5 17.115a2.3 2.3 0 0 0 .971-.2l-.1-1.6a2.4 2.4 0 0 1-.615.1 1.4 1.4 0 0 1-1.44-1.489v-3.192Z" style="fill:#fff"/>
			</svg>
		</div>
		<div class="twentigone-notice-content">
			<h3><?php esc_html_e( 'Recommended plugin: Twentig', 'twentig-one' ); ?></h3>
			<p><?php esc_html_e( 'Twentig is the perfect companion for your theme — featuring starter sites, enhanced blocks, patterns, and portfolio tools.', 'twentig-one' ); ?></p>
			<a class="twentigone-notice-button button-primary" href="<?php echo esc_url( $button_link ); ?>"><?php echo esc_html( $button_text ); ?></a>
		</div>
		<?php wp_nonce_field( 'twentigone-notice-nonce', 'twentigone_nonce', false ); ?>
	</div>
	<?php
}
add_action( 'admin_notices', 'twentigone_render_plugin_notice' );

/**
 * Enqueues notice styles.
 *
 * @return void
 */
function twentigone_notice_styles() {
	if ( ! twentigone_should_show_notice() ) {
		return;
	}

	?>
	<style>
		.twentigone-notice-container {
			display: flex;
			padding: 0;
			gap: 20px;
			border-left-color: #3858e9;
			background: #fff;
		}

		.twentigone-notice-logo {
			background: #f6f7fe;
			padding: 20px 12px;
		}

		.twentigone-notice-content {
			padding: 20px 0;
		}

		.twentigone-notice-content h3 {
			margin: 0;
		}

		.twentigone-notice-content p {
			font-size: 14px;
			padding: 0;
			margin: 0.5em 0 1em;
		}

		.button-primary.twentigone-notice-button {
			background: #3858e9;
			border-color: #3858e9;
		}

		.button-primary.twentigone-notice-button:is(:hover,:focus) {
			background: #2145e6;
			border-color: #2145e6;
		}

		.button-primary.twentigone-notice-button:focus {
			box-shadow: 0 0 0 1px #fff, 0 0 0 3px #3858e9;
		}
	</style>
	<?php
}
add_action( 'admin_head', 'twentigone_notice_styles', 100 );

/**
 * Enqueues notice JavaScript for dismiss functionality.
 *
 * @return void
 */
function twentigone_notice_script() {
	?>
	<script>
		( function( $ ) {
			$( '.twentigone-notice-container' ).on( 'click', 'button.notice-dismiss', function( event ) {
				event.preventDefault();
				var nonce = $( '.twentigone-notice-container' ).find( 'input[name="twentigone_nonce"]' ).val();
				$.post( ajaxurl, {
					action: 'twentigone_dismiss_notice',
					nonce: nonce
				} );
			} );
		} )( jQuery );
	</script>
	<?php
}

/**
 * Ajax handler for dismissing the notice.
 *
 * @return void
 */
function twentigone_ajax_dismiss_notice() {
	check_ajax_referer( 'twentigone-notice-nonce', 'nonce' );

	if ( ! current_user_can( 'install_plugins' ) ) {
		wp_send_json_error();
	}

	update_user_meta( get_current_user_id(), '_twentig_one_install_plugin_notice', true );
	wp_send_json_success();
}
add_action( 'wp_ajax_twentigone_dismiss_notice', 'twentigone_ajax_dismiss_notice' );
