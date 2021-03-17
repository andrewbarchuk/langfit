<?php
/**
 * Template part for displaying home offer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

$link_1 = get_post_meta($post->ID, 'link_1', true);
$link_2 = get_post_meta($post->ID, 'link_2', true);
$link_3 = get_post_meta($post->ID, 'link_3', true);
?>

<section class="home-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title"><?php esc_html_e( 'We offer', 'ieverly' ); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="offer__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/offer1.svg" alt="offer 1">
                    <h4><?php esc_html_e( 'offer title 1', 'ieverly' ); ?></h4>
                    <p><?php esc_html_e( 'offer description 1', 'ieverly' ); ?></p>

                    <a href="<?php esc_html_e($link_1); ?>" class="cta cta__blue"><?php esc_html_e( 'Learn more', 'ieverly' ); ?></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="offer__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/offer2.svg" alt="offer 1">
                    <h4><?php esc_html_e( 'offer title 2', 'ieverly' ); ?></h4>
                    <p><?php esc_html_e( 'offer description 2', 'ieverly' ); ?></p>
                    <a href="<?php esc_html_e($link_2); ?>" class="cta cta__blue"><?php esc_html_e( 'Learn more', 'ieverly' ); ?></a>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="offer__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/offer3.svg" alt="offer 1">
                    <h4><?php esc_html_e( 'offer title 3', 'ieverly' ); ?></h4>
                    <p><?php esc_html_e( 'offer description 3', 'ieverly' ); ?></p>
                    <a href="<?php esc_html_e($link_3); ?>" class="cta cta__blue"><?php esc_html_e( 'Learn more', 'ieverly' ); ?></a>
                </div>
            </div>
        </div>
    </div>
</section>