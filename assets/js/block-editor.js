wp.domReady( () => {
	// Unregister core block styles
	wp.blocks.unregisterBlockStyle( 'core/separator', 'wide' );
	wp.blocks.unregisterBlockStyle( 'core/image', 'rounded' );
	wp.blocks.unregisterBlockStyle( 'core/image', 'default' );
	// Register default spacer block variation with 20 preset spacing height
	wp.blocks.registerBlockVariation( 'core/spacer', {
		isDefault: true,
		name: 'twentigone-default',
		attributes: {
			height: 'var:preset|spacing|20',
		},
	} );
} );
