<?php

/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package ieverly
 */

if (!function_exists('ieverly_post_thumbnail')) :
	/**
	 * Displays an optional post thumbnail.
	 *
	 * Wraps the post thumbnail in an anchor element on index views, or a div
	 * element when on single views.
	 */
	function ieverly_post_thumbnail()
	{
		if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
			return;
		}

		if (is_singular()) :
?>

			<div class="post-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div><!-- .post-thumbnail -->

		<?php else : ?>

			<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'alt' => the_title_attribute(
							array(
								'echo' => false,
							)
						),
					)
				);
				?>
			</a>

<?php
		endif; // End is_singular().
	}
endif;

if (!function_exists('wp_body_open')) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open()
	{
		do_action('wp_body_open');
	}
endif;

if (!function_exists('theme_op')) :
	/**
	 * Generate fields in customize
	 */
	function theme_op($wp_customize)
	{
		$wp_customize->add_section(
			'ieverly_options',
			array(
				'title'       => __('Custom settings', 'ieverly'), //Visible title of section
				'priority'    => 20, //Determines what order this appears in
				'capability'  => 'edit_theme_options', //Capability needed to tweak
				'description' => __('Theme settings', 'ieverly'), //Descriptive tooltip
			)
		);

		// phone 1
		$wp_customize->add_setting(
			'phone_1', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
			array(
				'default'    => '', //Default setting/value to save
				'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
				'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
				//'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
			)
		);
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize, //Pass the $wp_customize object (required)
			'ieverly_theme_phone_1_title', //Set a unique ID for the control
			array(
				'label'      => __('Phone number', 'ieverly'), //Admin-visible name of the control
				'description' => __('Enter this text'),
				'settings'   => 'phone_1', //Which setting to load and manipulate (serialized is okay)
				'priority'   => 10, //Determines the order this control appears in for the specified section
				'section'    => 'ieverly_options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
				'type'    => 'text'
			)
		));

		// email
		$wp_customize->add_setting(
			'email', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
			array(
				'default'    => '', //Default setting/value to save
				'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
				'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
				//'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
			)
		);
		$wp_customize->add_control(new WP_Customize_Control(
			$wp_customize, //Pass the $wp_customize object (required)
			'ieverly_theme_email_title', //Set a unique ID for the control
			array(
				'label'      => __('E-mail', 'ieverly'), //Admin-visible name of the control
				'description' => __('Enter this email'),
				'settings'   => 'email', //Which setting to load and manipulate (serialized is okay)
				'priority'   => 10, //Determines the order this control appears in for the specified section
				'section'    => 'ieverly_options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
				'type'    => 'text'
			)
		));


		// video
		$wp_customize->add_setting(
			'video', //No need to use a SERIALIZED name, as `theme_mod` settings already live under one db record
			array(
				'default'    => '', //Default setting/value to save
				'type'       => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
				'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
				//'transport'  => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
			)
		);
		$wp_customize->add_control(new WP_Customize_Image_Control(
			$wp_customize, //Pass the $wp_customize object (required)
			'ieverly_theme_video_title', //Set a unique ID for the control
			array(
				'label'      => __('Video', 'ieverly'), //Admin-visible name of the control
				'description' => __('Check video'),
				'settings'   => 'video', //Which setting to load and manipulate (serialized is okay)
				'priority'   => 10, //Determines the order this control appears in for the specified section
				'section'    => 'ieverly_options', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
				'type'    => 'media',
				'mime_type' => 'video',
			)
		));
	}
	add_action('customize_register', 'theme_op');
endif;
