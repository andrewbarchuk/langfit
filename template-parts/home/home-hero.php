<?php

/**
 * Template part for displaying home hero box
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="hero home-hero">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="hero__text">
					<h1>Платформа для мовних шкіл та викладачів</h1>
					<ul class="hero__text-benefits">
						<li>Переведіть навчання в онлайн у найкоротші строки.</li>
						<li>Автоматизуйте рутинні робочі процеси.</li>
						<li>Отримайте доступ до інноваційної методології викладання.</li>
					</ul>
					<button class="cta cta__black">спробувати безкоштовно</button>
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