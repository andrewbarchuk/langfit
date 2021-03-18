<?php
/**
 * Template part for displaying home video
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
$video_id = get_theme_mod('video');
$video_url = wp_get_attachment_url( $video_id );
?>
<section class="home-video">
    <div class="video__box">
        <div class="video__box-tag">
            <video playsinline muted autoplay loop preload data-url="<?php esc_html_e($video_url); ?>">
                <source src="<?php esc_html_e($video_url); ?>">
                <p class="warning">Your browser does not support HTML5 video.</p>
            </video>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/video__bg.svg" alt="imac">
    </div>
</section>