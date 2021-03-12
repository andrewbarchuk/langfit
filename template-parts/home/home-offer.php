<?php
/**
 * Template part for displaying home offer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="home-offer">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title"><?php esc_html_e( 'We offer', 'ieverly' ); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="offer__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/offer1.svg" alt="offer 1">
                    <h4><?php esc_html_e( 'offer title 1', 'ieverly' ); ?></h4>
                    <p><?php esc_html_e( 'offer description 1', 'ieverly' ); ?></p>
                    <button data-micromodal-trigger="cta" data-from="offer box 1" class="cta cta__blue"><?php esc_html_e( 'Learn more', 'ieverly' ); ?></button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="offer__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/offer2.svg" alt="offer 1">
                    <h4><?php esc_html_e( 'offer title 2', 'ieverly' ); ?></h4>
                    <p><?php esc_html_e( 'offer description 2', 'ieverly' ); ?></p>
                    <button data-micromodal-trigger="cta" data-from="offer box 2" class="cta cta__blue"><?php esc_html_e( 'Learn more', 'ieverly' ); ?></button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="offer__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/offer3.svg" alt="offer 1">
                    <h4><?php esc_html_e( 'offer title 3', 'ieverly' ); ?></h4>
                    <p><?php esc_html_e( 'offer description 3', 'ieverly' ); ?></p>
                    <button data-micromodal-trigger="cta" data-from="offer box 3" class="cta cta__blue"><?php esc_html_e( 'Learn more', 'ieverly' ); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>