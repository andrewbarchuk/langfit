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
?>
<div class="schools-page">
<img class="bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/schools-page__bg.png" alt="schools page">

<?php
get_template_part( '/template-parts/schools/schools-hero' );
get_template_part( '/template-parts/schools/schools-offer' );
get_template_part( '/template-parts/schools/schools-branding' );
get_template_part( '/template-parts/home/home-video' );
get_template_part( '/template-parts/schools/schools-metodology' );
?>
</div>
<?php
get_template_part( '/template-parts/schools/schools-about' );
get_template_part( '/template-parts/schools/schools-benefits' );
get_template_part( '/template-parts/schools/schools-reviews' );
get_template_part( '/template-parts/schools/schools-howstart' );
get_template_part( '/template-parts/schools/schools-price' );
get_template_part( '/template-parts/schools/schools-questions' );

get_footer();
