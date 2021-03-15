<?php
/*
Template Name: Schools
*/

/**
 * 
 * The template for displaying schools
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
get_template_part( '/template-parts/schools/schools-hero' );
get_template_part( '/template-parts/schools/schools-offer' );
get_template_part( '/template-parts/schools/schools-video' );
get_template_part( '/template-parts/schools/schools-metodology' );
get_template_part( '/template-parts/schools/schools-about' );
get_template_part( '/template-parts/home/home-benefits' );
get_template_part( '/template-parts/home/home-reviews' );
get_template_part( '/template-parts/home/home-howstart' );
get_template_part( '/template-parts/home/home-price' );

get_footer();
