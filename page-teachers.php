<?php
/*
Template Name: Teachers
*/

/**
 * 
 * The template for displaying teachers
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
<div class="teachers-page">
<img class="bg" src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/schools-page__bg.png" alt="schools page">

<?php
get_template_part( '/template-parts/teachers/teachers-hero' );
get_template_part( '/template-parts/teachers/teachers-offer' );
get_template_part( '/template-parts/home/home-video' );
get_template_part( '/template-parts/teachers/teachers-metodology' );
?>
</div>
<?php
get_template_part( '/template-parts/teachers/teachers-about' );
get_template_part( '/template-parts/teachers/teachers-benefits' );
get_template_part( '/template-parts/teachers/teachers-reviews' );
get_template_part( '/template-parts/teachers/teachers-parthners' );
get_template_part( '/template-parts/teachers/teachers-howstart' );
get_template_part( '/template-parts/teachers/teachers-price' );
get_template_part( '/template-parts/teachers/teachers-questions' );

get_footer();
