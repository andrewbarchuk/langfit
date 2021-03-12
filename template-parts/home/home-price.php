<?php

/**
 * Template part for displaying home how start
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="home-price content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3 class="title"><?php esc_html_e('Price title', 'ieverly'); ?></h3>
            </div>
            <div class="col-lg-5">
                <div class="price__description">
                    <?php esc_html_e('Price description', 'ieverly'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="price__list">
                    <div class="price__box price__free">
                        <div class="price__box-num">0<span>₴</span></div>
                        <div class="price__box-description"><?php esc_html_e('first 3  months', 'ieverly'); ?></div>
                        <button class="cta cta__black"><?php esc_html_e('Start', 'ieverly'); ?></button>
                    </div>

                    <div class="price__box price__step step__1">
                        <div class="price__step-num"><?php esc_html_e('price step 1', 'ieverly'); ?></div>
                        <span><?php esc_html_e('For a lesson', 'ieverly'); ?></span>
                        <div class="divider"></div>
                        <div class="price__step-count"><?php esc_html_e('price count 1', 'ieverly'); ?></div>
                        <span><?php esc_html_e('Lessons per month', 'ieverly'); ?></span>
                    </div>

                    <div class="price__box price__step step__2">
                        <div class="price__step-num"><?php esc_html_e('price step 2', 'ieverly'); ?></div>
                        <span><?php esc_html_e('For a lesson', 'ieverly'); ?></span>
                        <div class="divider"></div>
                        <div class="price__step-count"><?php esc_html_e('price count 2', 'ieverly'); ?></div>
                        <span><?php esc_html_e('Lessons per month', 'ieverly'); ?></span>
                    </div>

                    <div class="price__box price__step step__3">
                        <div class="price__step-num"><?php esc_html_e('price step 3', 'ieverly'); ?></div>
                        <span><?php esc_html_e('For a lesson', 'ieverly'); ?></span>
                        <div class="divider"></div>
                        <div class="price__step-count"><?php esc_html_e('price count 3', 'ieverly'); ?></div>
                        <span><?php esc_html_e('Lessons per month', 'ieverly'); ?></span>
                    </div>

                    <div class="price__box price__step step__4">
                        <div class="price__step-num"><?php esc_html_e('price step 4', 'ieverly'); ?></div>
                        <span><?php esc_html_e('For a lesson', 'ieverly'); ?></span>
                        <div class="divider"></div>
                        <div class="price__step-count"><?php esc_html_e('price count 4', 'ieverly'); ?></div>
                        <span><?php esc_html_e('Lessons per month', 'ieverly'); ?></span>
                    </div>

                    <div class="price__box price__final">
                        <div class="price__final-count">
                            <span><b><?php esc_html_e('1000+', 'ieverly'); ?></b> <?php esc_html_e('Lessons per month', 'ieverly'); ?></span>
                            <div class="divider"></div>
                        </div>
                        <button class="cta cta__blue"><?php esc_html_e('Contact us', 'ieverly'); ?></button>
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