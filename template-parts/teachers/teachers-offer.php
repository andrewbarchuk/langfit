<?php
/**
 * Template part for displaying schools offer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="schools-offer content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title"><?php esc_html_e( 'We offer', 'ieverly' ); ?></h3>
            </div>
        </div>

        <div class="teachers-offer__list">
            <div class="schools-offer__box">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/teachers-offer1.svg" alt="offer 1">
                <h4><?php esc_html_e( 'teachers offer title 1', 'ieverly' ); ?></h4>
                <p><?php esc_html_e( 'teachers offer description 1', 'ieverly' ); ?></p>
            </div>
            <div class="schools-offer__box">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/teachers-offer2.svg" alt="offer 2">
                <h4><?php esc_html_e( 'teachers offer title 2', 'ieverly' ); ?></h4>
                <p><?php esc_html_e( 'teachers offer description 2', 'ieverly' ); ?></p>
            </div>
            <div class="schools-offer__box">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/schools-offer4.svg" alt="offer 4">
                <h4><?php esc_html_e( 'teachers offer title 4', 'ieverly' ); ?></h4>
                <p><?php esc_html_e( 'teachers offer description 4', 'ieverly' ); ?></p>
            </div>
            <div class="schools-offer__box">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/schools-offer5.svg" alt="offer 5">
                <h4><?php esc_html_e( 'teachers offer title 5', 'ieverly' ); ?></h4>
                <p><?php esc_html_e( 'teachers offer description 5', 'ieverly' ); ?></p>
            </div>
        </div>
    </div>
</section>