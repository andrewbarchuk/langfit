<?php
/**
 * Ieverly Theme sidebars
 *
 * @package ieverly
 */

function position_widgets_init()
{
    register_sidebar(array(
        'name' => __('Language switcher', 'ieverly'),
        'id' => 'lang',
        'before_widget' => '<div id="%1$s" class="widget lang__list %2$s">',
        'after_widget' => '</div>',
        'before_title'  => '',
        'after_title'   => '',
    ));
}
add_action('widgets_init', 'position_widgets_init');
