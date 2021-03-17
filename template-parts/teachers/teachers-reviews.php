<?php

/**
 * Template part for displaying home reviews
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */
?>

<section class="teachers-reviews content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="title"><?php esc_html_e('Reviews title', 'ieverly'); ?></h3>
            </div>
        </div>

        <?php
        $reviews_query = new WP_Query(
            array(
                'post_type'      => 'reviews',
                'meta_query'     => array(
                    array(
                        'key'   => 'reviews_teachers_check',
                        'value' => 'on',
                    ),
                ),
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
                'posts_per_page' => '-1',
            )
        );
        if ($reviews_query->have_posts()) :
        ?>

            <div class="glide reviews__slider">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">

                        <?php
                        while ($reviews_query->have_posts()) :
                            $reviews_query->the_post();
                            get_template_part('template-parts/home/home-reviews-item', get_post_format());
                        endwhile;

                        ?>
                    </div>
                </div>

                <div class="glide__arrows reviews__slider-arrows" data-glide-el="controls">
                    <button data-glide-dir="<"><?php ieverly_the_theme_svg('chevron-left', 'ui'); ?></button>
                    <button data-glide-dir=">"><?php ieverly_the_theme_svg('chevron-right', 'ui'); ?></button>
                </div>
            </div>

        <?php
        else :
            get_template_part('template-parts/not-found', get_post_format());
        endif;

        wp_reset_postdata();
        ?>

    </div>
</section>