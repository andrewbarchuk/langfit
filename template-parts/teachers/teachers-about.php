<?php

/**
 * Template part for displaying schools about
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
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
                    <a href="/" class="cta cta__blue"><?php esc_html_e('Learn more', 'ieverly'); ?></a>
                    <button data-micromodal-trigger="cta" data-from="try for free (home) responsive" class="cta cta__black"><?php esc_html_e('Try for free', 'ieverly'); ?></button>
                </div>
            </div>
        </div>
    </div>
</section>