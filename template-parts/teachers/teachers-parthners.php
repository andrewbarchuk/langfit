<?php

/**
 * Template part for displaying parthners
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="teachers-parthners">
    <img class="bg" src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/benefits__bg.png" alt="parthners">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4><?php esc_html_e( 'parthners title', 'ieverly' ); ?></h4>
            </div>
        </div>

        <div class="row">
            <div class="col-12 cta__center">
                <button id="signup_popup_open__join_the_school" data-submit="signup_submit__join_the_school" data-close="signup_popup_close__join_the_school" data-from="Teachers join the school" data-micromodal-trigger="cta" class="cta cta__black"><?php esc_html_e('Leave a request for cooperation', 'ieverly'); ?></button>
            </div>
        </div>
    </div>
</section>