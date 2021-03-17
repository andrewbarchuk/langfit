<?php

/**
 * Template part for displaying portfolio item
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ieverly
 */

if (has_post_thumbnail()) {
    $reviews_cover = get_the_post_thumbnail_url(get_the_ID(), 'large');
} else {
    $reviews_cover = get_template_directory_uri() . '/dist/images/img-default.png';
}

$reviews_description = get_post_meta($post->ID, 'reviews_description', true);
$reviews_fb = get_post_meta($post->ID, 'reviews_fb', true);
$reviews_link = get_post_meta($post->ID, 'reviews_link', true);
$reviews_link_title = get_post_meta($post->ID, 'reviews_link_title', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('reviews__box'); ?>>
    <div class="row">
        <div class="col-lg-7">
            <header>
                <h4><?php echo get_the_title(); ?></h4>
                <?php if ($reviews_description) { ?>
                    <div class="reviews__box-description"><?php esc_html_e($reviews_description); ?></div>
                <?php } ?>

                <div class="reviews__box-content">
                    <?php the_content(); ?>
                </div>

                <div class="reviews__box-links">
                    <?php if ($reviews_fb) { ?>
                        <a href="<?php esc_html_e( $reviews_fb ); ?>" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40.392" height="40.392" viewBox="0 0 40.392 40.392">
                                <path id="Path_39408" data-name="Path 39408" d="M-1006.114,243.052a20.194,20.194,0,0,0-20.2-20.2,20.194,20.194,0,0,0-20.2,20.2,20.194,20.194,0,0,0,20.2,20.2c.118,0,.237,0,.356-.008V247.525h-4.339v-5.057h4.339v-3.723c0-4.316,2.634-6.667,6.484-6.667a35.222,35.222,0,0,1,3.889.2v4.512h-2.65c-2.091,0-2.5.994-2.5,2.454v3.219h5.009l-.654,5.057h-4.355v14.95a20.2,20.2,0,0,0,14.618-19.415Zm0,0" transform="translate(1046.506 -222.856)" fill="#4fa2ff" />
                            </svg>
                        </a>
                    <?php } elseif ($reviews_link) { ?>
                        <a class="textlink" href="<?php esc_html_e($reviews_link); ?>" target="_blank">
                            <?php esc_html_e($reviews_link_title); ?>
                        </a>
                    <?php } ?>
                </div>
            </header>
        </div>
        <div class="col-lg-5">
            <figure>
                <img src="<?php echo $reviews_cover; ?>" alt="<?php echo get_the_title(); ?>">
            </figure>
        </div>
    </div>
</article>
<!-- post-<?php the_ID(); ?> -->