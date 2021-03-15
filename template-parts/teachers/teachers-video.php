<?php
/**
 * Template part for displaying home video
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="home-video schools-video">
    <div class="video__box">
        <div class="video__box-tag">
            <video controls="controls" autoplay loop preload>
                <source src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/video.mp4">
                <p class="warning">Your browser does not support HTML5 video.</p>
            </video>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/video__bg.svg" alt="imac">
    </div>
</section>