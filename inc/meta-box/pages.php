<?php
/**
 * Ieverly Theme pages meta-box
 *
 * @package ieverly
 */

function pages_info()
{
	global $post;
	if ( 'page-home.php' == get_post_meta( $post->ID, '_wp_page_template', true ) || 'page-schools.php' == get_post_meta( $post->ID, '_wp_page_template', true ) || 'page-teachers.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
		add_meta_box(
			'pages_info',
			__('Settings', 'ieverly'),
			'show_pages_info',
			'page',
			'normal',
			'high'
		);
	}
}
add_action('add_meta_boxes', 'pages_info');

$meta_pages = array(
	array(
		'label' => __('Link 1', 'ieverly'),
		'desc'  => __('Enter link 1', 'ieverly'),
		'id'    => 'link_1',
		'type'  => 'text',
	),
	array(
		'label' => __('Link 2', 'ieverly'),
		'desc'  => __('Enter link 2', 'ieverly'),
		'id'    => 'link_2',
		'type'  => 'text',
	),
	array(
		'label' => __('Link 3', 'ieverly'),
		'desc'  => __('Enter link 3', 'ieverly'),
		'id'    => 'link_3',
		'type'  => 'text',
	),
	array(
		'label' => __('Link 4', 'ieverly'),
		'desc'  => __('Enter link 4', 'ieverly'),
		'id'    => 'link_4',
		'type'  => 'text',
	),
);

function show_pages_info()
{
	global $meta_pages;
	global $post;

	echo '<input type="hidden" name="custom_meta_box_nonce" value="' . wp_create_nonce(basename(__FILE__)) . '" />';

	echo '<table class="form-table">';
	foreach ($meta_pages as $field) {
		$meta = get_post_meta($post->ID, $field['id'], true);
		echo '<tr>
                <th><label for="' . $field['id'] . '">' . $field['label'] . '</label></th>
                <td>';
		switch ($field['type']) {
			case 'text':
				echo '<input type="text" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . $meta . '" size="30" />
                        <br /><span class="description">' . $field['desc'] . '</span>';
				break;
			case 'checkbox':
				echo '<input type="checkbox" name="' . $field['id'] . '" id="' . $field['id'] . '" ', $meta ? ' checked="checked"' : '', '/>
                            <label for="' . $field['id'] . '">' . $field['desc'] . '</label>';
				break;
			case 'textarea':
				echo '<textarea name="' . $field['id'] . '" id="' . $field['id'] . '" cols="60" rows="4">' . $meta . '</textarea>
                            <br /><span class="description">' . $field['desc'] . '</span>';
				break;
			case 'image':
				if ($image = wp_get_attachment_image_src($meta)) {
					echo '<a href="#" class="up-upl"><img src="' . $image[0] . '" /></a>
                                  <input type="hidden" name="' . $field['id'] . '" value="' . $meta . '">
                                  <a href="#" class="up-rmv">Remove image</a>
                                  ';
				} else {
					echo '<a href="#" class="up-upl">Upload image</a>
                                  <input type="hidden" name="' . $field['id'] . '" value="">
                                  <a href="#" class="up-rmv" style="display:none">Remove image</a>
                                  ';
				}
				break;
			case 'gallery':
				echo '<div><ul class="gallery_mtb">';
				/* array with image IDs for hidden field */
				$hidden = array();

				if ($images = get_posts(
					array(
						'post_type'      => 'attachment',
						'orderby'        => 'post__in', /* we have to save the order */
						'order'          => 'ASC',
						'post__in'       => explode(',', $meta), /* $value is the image IDs comma separated */
						'numberposts'    => -1,
						'post_mime_type' => 'image',
					)
				)) {

					foreach ($images as $image) {
						$hidden[]  = $image->ID;
						$image_src = wp_get_attachment_image_src($image->ID, 'medium');
						echo '<li data-id="' . $image->ID . '"><img src="' . $image_src[0] . '"><a href="#" class="gallery_remove">×</a></li>';
					}
				}

				echo '</ul><div style="clear:both"></div></div>';
				echo '<input type="hidden" name="' . $field['id'] . '" id="' . $field['id'] . '" value="' . join(',', $hidden) . '" /><a href="#" class="button upload_gallery_button">Add Images</a>';
				break;
		}
		echo '</td></tr>';
	}
	echo '</table>';
}

function save_pages_info($post_id)
{
	global $meta_pages;

	if (!wp_verify_nonce($_POST['custom_meta_box_nonce'], basename(__FILE__))) {
		return $post_id;
	}
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}
	if ('page' == $_POST['post_type']) {
		if (!current_user_can('edit_page', $post_id)) {
			return $post_id;
		}
	} elseif (!current_user_can('edit_post', $post_id)) {
		return $post_id;
	}

	foreach ($meta_pages as $field) {
		$old = get_post_meta($post_id, $field['id'], true);
		$new = $_POST[$field['id']];
		if ($new && $new != $old) {
			update_post_meta($post_id, $field['id'], $new);
		} elseif ('' == $new && $old) {
			delete_post_meta($post_id, $field['id'], $old);
		}
	} // end foreach  
}
add_action('save_post', 'save_pages_info');


// gallery
function meta_boxes()
{
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-widget');
	wp_enqueue_script('jquery-ui-sortable');

	if (!did_action('wp_enqueue_media')) {
		wp_enqueue_media();
	}

	wp_enqueue_script('myuploadscript', get_stylesheet_directory_uri() . '/js/meta-box.js', array('jquery'));
}
add_action('admin_enqueue_scripts', 'meta_boxes');
