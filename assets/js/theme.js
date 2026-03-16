(function() {
	document.addEventListener( 'DOMContentLoaded', function() {

		const button = document.querySelector( '.wp-block-navigation__responsive-container-open' );

		if ( button ) {
			const closeButton = document.querySelector( '.wp-block-navigation__responsive-container-close' );
			const navigationContainer = document.querySelector( '.wp-block-navigation__responsive-container' );

			if ( closeButton && navigationContainer ) {
				const positionBurger = function () {
					const rect = button.getBoundingClientRect();
					const paddingTop = rect.height + 2 * rect.top;
					const right = window.innerWidth - rect.right;
					closeButton.style.top = rect.top + 'px';
					closeButton.style.right = right + 'px';
					navigationContainer.style.setProperty( '--tw-top', paddingTop + 'px' );
				};

				const handleClick = function ( event ) {
					positionBurger();
					window.addEventListener( 'resize', positionBurger, false );
				};
				button.addEventListener( 'click', handleClick );

				closeButton.addEventListener( 'click', function() {
					window.removeEventListener( 'resize', positionBurger );
				} );
			}
		}

		const header = document.querySelector( 'header.wp-block-template-part' );

		if ( header !== null ) {
			const header_styles = window.getComputedStyle( header );
			const position = header_styles.getPropertyValue( 'position' );

			if ( ( 'sticky' === position || 'fixed' === position ) ) {
				const hasAnchorLinks = document.querySelectorAll( 'a[href^="#"]' ).length > 0;
				if ( hasAnchorLinks ) {
					document.documentElement.style.setProperty( '--tw-header-height', header.clientHeight + 'px' );

					let resizeDebounce;
					const handleResize = () => {
						if ( ! resizeDebounce ) {
							resizeDebounce = requestAnimationFrame(() => {
								document.documentElement.style.setProperty( '--tw-header-height', header.clientHeight + 'px' );
								resizeDebounce = null;
							});
						}
					};
					window.addEventListener( 'resize', handleResize );
				}
			}

			if ( 'fixed' === position && header.classList.contains( 'header-transparent' ) ) {
				const scrollTop = window.scrollY;
				if ( scrollTop > 1 ) {
					header.classList.add( 'tw-header-opaque' );
				}

				let ticking = false;

				window.addEventListener( 'scroll', function() {
					if ( ! ticking ) {
						ticking = true;
						requestAnimationFrame( function() {
							const currentScrollTop = window.scrollY;
							if ( currentScrollTop > 1 ) {
								header.classList.add( 'tw-header-opaque' );
							} else {
								header.classList.remove( 'tw-header-opaque' );
							}
							ticking = false;
						} );
					}
				} );
			}
		}
	});
})();
