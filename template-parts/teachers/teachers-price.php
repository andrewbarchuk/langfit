<?php
/**
 * Template part for displaying teachers price
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="teachers-price content" id="prices">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h3 class="title"><?php esc_html_e('teachers price title', 'ieverly'); ?></h3>
            </div>
            <div class="col-lg-4">
                <div class="price__description">
                    <?php esc_html_e('teachers price description', 'ieverly'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="price__list">
                    <div class="price__box price__free">
                        <div class="price__box-num">0<span>₴</span></div>
                        <div class="price__box-description"><?php esc_html_e('first 3  months', 'ieverly'); ?></div>
                        <button id="signup_popup_open__prices_start_for_free" data-submit="signup_submit__prices_start_for_free" data-close="signup_popup_close__prices_start_for_free" data-from="Teachers prices - start for free" data-micromodal-trigger="cta" class="cta cta__black"><?php esc_html_e('Start', 'ieverly'); ?></button>
                    </div>

                    <div class="price__box price__step step__1">
                        <div class="price__step-num"><?php esc_html_e('teachers step 1', 'ieverly'); ?></div>
                        <span><?php esc_html_e('For a lesson', 'ieverly'); ?></span>
                        <div class="divider"></div>
                        <span><?php esc_html_e('start at', 'ieverly'); ?></span>
                        <div class="price__step-count"><?php esc_html_e('four month', 'ieverly'); ?></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="price__info"><?php esc_html_e('Price info', 'ieverly'); ?></div>
            </div>
        </div>
    </div>
</section>