import Glide from '@glidejs/glide';
import MicroModal from 'micromodal';

const glide_settings = {
	/**
	 * Glide all settings
	 */

	init() {
		const slider = document.querySelector('.glide');
		if (slider) {
			// Glide settings
			const glide = new Glide('.glide', {
				type: 'carousel',
				gap: '0',
			});

			// Glide mount
			glide.mount({
			});
		}
	},
};

const smooth_scroll = {
	/**
	 * Smooth scroll to anchor & header fix
	 */
	init() {

		// form name
		function cta_form() {
			const cta_value = document.querySelector('.fromform'),
			      cta_submit = document.querySelector('.wpcf7-submit'),
				  cta_modal = document.querySelector('.modal__close');

			document.querySelectorAll('.cta[data-from]').forEach((elem, i) => {
				elem.addEventListener('click', function (event) {
					cta_value.value = elem.dataset.from;
					cta_submit.setAttribute('id', elem.dataset.submit);
					cta_modal.setAttribute('id', elem.dataset.close);
				});
			});
		}
		cta_form();

		// modal
		MicroModal.init({
			disableScroll: true,
			awaitOpenAnimation: true,
			awaitCloseAnimation: true, 
			debugMode: true
		  });

		// add anchors
		document.querySelectorAll('a[href^="#"]').forEach((trigger) => {
			trigger.onclick = function (e) {
				e.preventDefault();
				let hash = this.getAttribute('href');
				let target = document.querySelector(hash);
				let headerOffset = 0;
				let elementPosition = target.offsetTop;
				let offsetPosition = elementPosition + headerOffset;

				window.scrollTo({
					top: offsetPosition,
					behavior: 'smooth',
				});
			};
		});








		const siteNavigation = document.getElementById( 'site-navigation' );

		// Return early if the navigation don't exist.
		if ( ! siteNavigation ) {
			return;
		}
	
		const button = siteNavigation.getElementsByTagName( 'button' )[ 0 ];
	
		// Return early if the button don't exist.
		if ( 'undefined' === typeof button ) {
			return;
		}
	
		const menu = siteNavigation.getElementsByTagName( 'ul' )[ 0 ];
	
		// Hide menu toggle button if menu is empty and return early.
		if ( 'undefined' === typeof menu ) {
			button.style.display = 'none';
			return;
		}
	
		if ( ! menu.classList.contains( 'nav-menu' ) ) {
			menu.classList.add( 'nav-menu' );
		}
	
		// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
		button.addEventListener( 'click', function() {
			siteNavigation.classList.toggle( 'toggled' );
			const overflow = document.querySelector('body');
	
			if ( button.getAttribute( 'aria-expanded' ) === 'true' ) {
				button.setAttribute( 'aria-expanded', 'false' );
				overflow.style.removeProperty('overflow-y');
			} else {
				button.setAttribute( 'aria-expanded', 'true' );
				overflow.style.overflowY = 'hidden';
			}
		} );
	
		// Remove the .toggled class and set aria-expanded to false when the user clicks outside the navigation.
		document.addEventListener( 'click', function( event ) {
			const isClickInside = siteNavigation.contains( event.target );
	
			if ( ! isClickInside ) {
				siteNavigation.classList.remove( 'toggled' );
				button.setAttribute( 'aria-expanded', 'false' );
			}
		} );
	
		// Get all the link elements within the menu.
		const links = menu.getElementsByTagName( 'a' );
	
		// Get all the link elements with children within the menu.
		const linksWithChildren = menu.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );
	
		// Toggle focus each time a menu link is focused or blurred.
		for ( const link of links ) {
			link.addEventListener( 'focus', toggleFocus, true );
			link.addEventListener( 'blur', toggleFocus, true );
		}
	
		// Toggle focus each time a menu link with children receive a touch event.
		for ( const link of linksWithChildren ) {
			link.addEventListener( 'touchstart', toggleFocus, false );
		}
	
		/**
		 * Sets or removes .focus class on an element.
		 */
		function toggleFocus() {
			if ( event.type === 'focus' || event.type === 'blur' ) {
				let self = this;
				// Move up through the ancestors of the current link until we hit .nav-menu.
				while ( ! self.classList.contains( 'nav-menu' ) ) {
					// On li elements toggle the class .focus.
					if ( 'li' === self.tagName.toLowerCase() ) {
						self.classList.toggle( 'focus' );
					}
					self = self.parentNode;
				}
			}
	
			if ( event.type === 'touchstart' ) {
				const menuItem = this.parentNode;
				event.preventDefault();
				for ( const link of menuItem.parentNode.children ) {
					if ( menuItem !== link ) {
						link.classList.remove( 'focus' );
					}
				}
				menuItem.classList.toggle( 'focus' );
			}
		}











	},
};

document.addEventListener('DOMContentLoaded', () => {
	glide_settings.init();
	smooth_scroll.init();
});
