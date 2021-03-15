<?php

/**
 * Template part for displaying schools branding
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="schools-branding content">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <h3 class="title"><?php esc_html_e('schools branding title', 'ieverly'); ?></h3>
            </div>
            <div class="col-lg-5">
                <div class="price__description">
                    <?php esc_html_e('schools branding description', 'ieverly'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="schools-branding__box">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/dist/images/schools-branding.png" alt="schools branding">
                </div>
            </div>
        </div>
    </div>
</section>