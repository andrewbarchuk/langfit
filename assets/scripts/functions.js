import Glide from '@glidejs/glide';

const glide_settings = {
	/**
	 * Glide all settings
	 */

	init() {
		const elem = document.querySelector('.glide');
		if (elem) {
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
	},
};

document.addEventListener('DOMContentLoaded', () => {
	glide_settings.init();
	smooth_scroll.init();
});
