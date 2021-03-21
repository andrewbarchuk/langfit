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
				autoplay: 4000,
				hoverpause: true,
				animationDuration: 1000,
				type: 'carousel',
				gap: '0'
			});

			// Glide mount
			glide.mount({
			});
		}
	},
};

const settings = {
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
		if (document.querySelector('.cta[data-from]')) {
			MicroModal.init({
				disableScroll: true,
				awaitOpenAnimation: true,
				awaitCloseAnimation: true,
				debugMode: true
			});
		}

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

		// hide video
		function hide_video() {
			const video_source = document.querySelector('.video__box-tag source'),
				  video_url = document.querySelector('.video__box-tag video').dataset.url;
			
			if (window.matchMedia("(min-width: 992px)").matches) {
				video_source.setAttribute('src', video_url);
			} else {
				video_source.removeAttribute('src');
			}
		}

		if (document.querySelector('.video__box-tag')) {
			hide_video();

			window.addEventListener('resize', function (event) {
				hide_video();
			});
		}

		// Menu toggle button
		function navigation_togge() {
			const siteNavigation = document.getElementById('site-navigation');

			// Return early if the navigation don't exist.
			if (!siteNavigation) {
				return;
			}

			const button = siteNavigation.querySelector('.site__header-menu-button');

			// Return early if the button don't exist.
			if ('undefined' === typeof button) {
				return;
			}

			const menu = siteNavigation.getElementsByTagName('ul')[0];

			// Hide menu toggle button if menu is empty and return early.
			if ('undefined' === typeof menu) {
				button.style.display = 'none';
				return;
			}

			if (!menu.classList.contains('nav-menu')) {
				menu.classList.add('nav-menu');
			}

			function toggled_menu() {
				siteNavigation.classList.toggle('toggled');
				const overflow = document.querySelector('body');

				if (button.getAttribute('aria-expanded') === 'true') {
					button.setAttribute('aria-expanded', 'false');
					overflow.style.removeProperty('overflow');
				} else {
					button.setAttribute('aria-expanded', 'true');
					overflow.style.overflow = 'hidden';
				}
			}

			// Toggle the .toggled class and the aria-expanded value each time the button is clicked.
			button.addEventListener('click', function () {
				toggled_menu();
			});

			// Toogle when click # tag
			document.querySelectorAll('.site__header-nav-box a[href^="#"]').forEach((pod) => {
				pod.addEventListener('click', function () {
					siteNavigation.classList.remove('toggled');
					button.setAttribute('aria-expanded', 'false');
					document.querySelector('body').style.removeProperty('overflow');
				});
			});
		}
		navigation_togge();
	},
};

document.addEventListener('DOMContentLoaded', () => {
	glide_settings.init();
	settings.init();
});
