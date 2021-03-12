<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ieverly
 */

?>

<footer id="colophon" class="site__footer content">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="footer__contact">
					<span><?php esc_html_e( 'Contact us', 'ieverly' ); ?></span>
					<a class="tel" href="tel:<?php echo tag_escape(get_theme_mod('phone_1')); ?>"><?php esc_html_e(get_theme_mod('phone_1')); ?></a>
					<a class="mail" href="mailto:<?php esc_html_e(get_theme_mod('email')); ?>"><?php esc_html_e(get_theme_mod('email')); ?></a>
				</div>
			</div>

			<div class="col-lg-3">
				<nav class="site__footer-menu">
					<h4><?php esc_html_e( 'Solutions', 'ieverly' ); ?></h4>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'header',
						)
					);
					?>
				</nav>
			</div>

			<div class="col-lg-3">
				<nav class="site__footer-menu">
					<h4><?php esc_html_e( 'General information', 'ieverly' ); ?></h4>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'info',
						)
					);
					?>
				</nav>
			</div>

			<div class="col-lg-2 lang-end">
				<?php dynamic_sidebar('lang'); ?>
			</div>
		</div>

		<div class="row footer__terms">
			<div class="col-md-6">
				<div class="site__footer-copyright">
					<span class="name">© <b><?php echo get_bloginfo('name'); ?></b>, <?php echo date('Y'); ?></span>
				</div>
			</div>

			<div class="col-lg-6">
				<nav class="site__footer-menu footer__social-menu">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
						)
					);
					?>
				</nav>
			</div>
		</div>
	</div>

	<div class="footer__slogan">Keep your<br>brain fit!</div>
</footer>
</div>


<?php 
	get_template_part( '/template-parts/modal' );
	wp_footer(); 
?>

</body>

</html>