<?php
/**
 * Template part for displaying schools questions
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="schools-questions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title"><?php esc_html_e( 'Advanced questions', 'ieverly' ); ?></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <?php the_content(); ?>
            </div>
        </div>
    </div>
</section>