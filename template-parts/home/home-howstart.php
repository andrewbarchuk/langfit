<?php
/**
 * Template part for displaying home how start
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="home-howstart content" id="start">
    <div class="container">
        <div class="row">
            <div class="col-12">            
                <h3 class="title"><?php esc_html_e('How to start', 'ieverly'); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="howstart__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/howstart1.svg" alt="howstart1">
                    <div>
                        <span>1</span>
                        <h4><?php esc_html_e('how start box title 1', 'ieverly'); ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="howstart__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/howstart2.svg" alt="howstart2">
                    <div>
                        <span>2</span>
                        <h4><?php esc_html_e('how start box title 2', 'ieverly'); ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="howstart__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/howstart3.svg" alt="howstart3">
                    <div>
                        <span>3</span>
                        <h4><?php esc_html_e('how start box title 3', 'ieverly'); ?></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="howstart__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/howstart4.svg" alt="howstart4">
                    <div>
                        <span>4</span>
                        <h4><?php esc_html_e('how start box title 4', 'ieverly'); ?></h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 cta__center">
                <button id="signup_popup_open__try_it_now" data-submit="signup_submit__try_it_now" data-close="signup_popup_close__try_it_now" data-from="Home try it now" data-micromodal-trigger="cta" class="cta cta__black"><?php esc_html_e('Leave a request', 'ieverly'); ?></button>
            </div>
        </div>
    </div>
</section>