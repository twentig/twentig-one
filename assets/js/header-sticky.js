import { store, getElement } from '@wordpress/interactivity';

const SCROLL_SENSITIVITY = 5;

let lastScrollY = 0;
let ticking = false;

const { state } = store( 'twentigone/sticky-header', {
	state: {
		isHidden: false,
		isSticky: false,
		hasRevealed: false,
	},
	callbacks: {
		init: () => {
			const { ref } = getElement();
			lastScrollY = Math.max( 0, window.scrollY );
			state.isSticky = ref.getBoundingClientRect().bottom <= 0;
			state.isHidden = state.isSticky;
			state.hasRevealed = false;
		},
		handleScroll: () => {
			if ( ticking ) {
				return;
			}

			ticking = true;
			const { ref } = getElement();

			window.requestAnimationFrame( () => {
				const currentScrollY = Math.max( 0, window.scrollY );
				const scrollDelta = Math.abs( currentScrollY - lastScrollY );

				if ( scrollDelta <= SCROLL_SENSITIVITY && currentScrollY > 0 ) {
					ticking = false;
					return;
				}

				if ( currentScrollY === 0 ) {
					state.isSticky = false;
					state.isHidden = false;
					state.hasRevealed = false;
				} else if ( ! state.isSticky ) {
					// Prepare the hidden sticky header only after it has naturally left the viewport.
					state.isSticky = ref.getBoundingClientRect().bottom <= 0;
					state.isHidden = state.isSticky;
				} else {
					state.isHidden = currentScrollY > lastScrollY;
					if ( ! state.isHidden ) {
						state.hasRevealed = true;
					}
				}

				lastScrollY = currentScrollY;
				ticking = false;
			} );
		},
	},
} );
