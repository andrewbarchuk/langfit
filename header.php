<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ieverly
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MSGM6X2');</script>
	<!-- End Google Tag Manager -->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MSGM6X2"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<?php wp_body_open(); ?>
	<div id="page" class="site">

		<header id="masthead" class="site__header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-3 col-6 static">
						<div class="site__header-branding">
							<?php the_custom_logo(); ?>
						</div>
					</div>

					<div class="col-lg-10 col-md-9 col-6 static">
						<div id="site-navigation" class="site__header-navigation">
							<button class="site__header-menu-button" aria-controls="primary-menu" aria-expanded="false">
								<b></b>
								<b></b>
								<b></b>
							</button>

							<div class="site__header-nav-box">
								<div class="container">
									<nav class="site__header-menu-second">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'page',
											)
										);
										?>
									</nav>

									<nav class="site__header-menu">
										<?php
										wp_nav_menu(
											array(
												'theme_location' => 'header',
											)
										);
										?>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>