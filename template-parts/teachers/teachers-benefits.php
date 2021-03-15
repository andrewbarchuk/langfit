<?php

/**
 * Template part for displaying home benefits
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="home-benefits">
    <img class="bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/benefits__bg.png" alt="benefits">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="benefits__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/benefit1.svg" alt="benefit1">
                    <p>
                        <b><?php esc_html_e('benefits title 1', 'ieverly'); ?></b>
                        <span><?php esc_html_e('benefits description 1', 'ieverly'); ?></span>
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="benefits__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/benefit2.svg" alt="benefit2">
                    <p>
                        <b><?php esc_html_e('benefits title 2', 'ieverly'); ?></b>
                        <span><?php esc_html_e('benefits description 2', 'ieverly'); ?></span>
                    </p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="benefits__box">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/benefit3.svg" alt="benefit3">
                    <p>
                        <b><?php esc_html_e('benefits title 3', 'ieverly'); ?></b>
                        <span><?php esc_html_e('benefits description 3', 'ieverly'); ?></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>