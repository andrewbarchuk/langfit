<?php

/**
 * Template part for displaying home hero box
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="schools-hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="hero__text">
					<h1><?php esc_html_e( 'schools hero title', 'ieverly' ); ?></h1>
					<ul class="hero__text-benefits">
						<li><?php esc_html_e( 'schools hero description 1', 'ieverly' ); ?></li>
						<li><?php esc_html_e( 'schools hero description 2', 'ieverly' ); ?></li>
						<li><?php esc_html_e( 'schools hero description 3', 'ieverly' ); ?></li>
					</ul>
					<button data-micromodal-trigger="cta" data-from="hero" class="cta cta__black"><?php esc_html_e( 'Try for free', 'ieverly' ); ?></button>
					<ul class="hero__text-lang">
						<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/eng.svg" alt="english"></li>
						<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/spa.svg" alt="spain"></li>
						<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/pol.svg" alt="poland"></li>
						<li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/fra.svg" alt="france"></li>
						<li>+87</li>
					</ul>
				</div>
			</div>

			<div class="col-lg-5">
				<div class="hero__image">
					<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/home-hero.svg" alt="hero">
				</div>
			</div>
		</div>
	</div>
</section>