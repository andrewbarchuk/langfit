<?php
/*
Template Name: Home
*/

/**
 * 
 * The template for displaying portfolio
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

get_header();
get_template_part( '/template-parts/home/home-hero' );
get_template_part( '/template-parts/home/home-offer' );
get_template_part( '/template-parts/home/home-video' );
get_template_part( '/template-parts/home/home-metodology' );
get_template_part( '/template-parts/home/home-about' );
get_template_part( '/template-parts/home/home-benefits' );
get_template_part( '/template-parts/home/home-reviews' );
get_template_part( '/template-parts/home/home-howstart' );
get_template_part( '/template-parts/home/home-price' );

get_footer();
