<?php
/**
 * Template part for displaying schools about
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

$link_4 = get_post_meta($post->ID, 'link_4', true);
?>

<section class="home-about content">
    <div class="container">
        <div class="row about__box">
            <div class="col-lg-6">
                <h4><?php esc_html_e('schools methodology title 1', 'ieverly'); ?></h4>
                <p><?php esc_html_e('schools methodology description 1', 'ieverly'); ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/about1.svg" alt="about1">
            </div>
        </div>

        <div class="row about__box">
            <div class="col-lg-6">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/about2.svg" alt="about1">
            </div>
            <div class="col-lg-6">
                <h4><?php esc_html_e('schools methodology title 2', 'ieverly'); ?></h4>
                <p><?php esc_html_e('schools methodology description 2', 'ieverly'); ?></p>
            </div>
        </div>

        <div class="row about__box">
            <div class="col-lg-6">
                <h4><?php esc_html_e('schools methodology title 3', 'ieverly'); ?></h4>
                <p><?php esc_html_e('schools methodology description 3', 'ieverly'); ?></p>
            </div>
            <div class="col-lg-6">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/dist/images/about3.svg" alt="about1">
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="about__box-buttons">
                    <a href="<?php esc_html_e($link_4); ?>" class="cta cta__blue"><?php esc_html_e('Learn more', 'ieverly'); ?></a>
                    <button id="signup_popup_open__about-methodology" data-submit="signup_submit__about-methodology" data-close="signup_popup_close__about-methodology" data-from="Schools about methodology" data-micromodal-trigger="cta" class="cta cta__black"><?php esc_html_e('Try for free', 'ieverly'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>