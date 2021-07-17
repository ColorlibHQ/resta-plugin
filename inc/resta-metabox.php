<?php
function resta_page_metabox( $meta_boxes ) {

	$resta_prefix = '_resta_';
	$meta_boxes[] = array(
		'id'        => 'resta_metaboxes',
		'title'     => esc_html__( 'Additional Options', 'resta-companion' ),
		'post_types'=> array( 'project' ),
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'    => $resta_prefix . 'project_excerpt_txt',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Project Excerpt Text', 'resta-companion' ),
			),
			array(
				'id'    => $resta_prefix . 'project_date',
				'type'  => 'date',
				'js_options' => array(
					'dateFormat'      => 'dd-M-yy',
					'showButtonPanel' => false,
				),
				'name'  => esc_html__( 'Project Date', 'resta-companion' ),
			),
			array(
				'id'    => $resta_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'resta-companion' ),
			),
			array(
				'id'    => $resta_prefix . 'project_imgs',
				'type'  => 'image_advanced',
				'multiple'  => true,
				'name'  => esc_html__( 'Project Images', 'resta-companion' ),
				'description' => esc_html__( 'Best size is 1146x680', 'resta-companion' ),
			),
			array(
				'id'    => $resta_prefix . 'project_quote_txt',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Project Quote Box', 'resta-companion' ),
			),
			array(
				'id'    => $resta_prefix . 'project_left_txt',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Project Left Box', 'resta-companion' ),
				'desc'  => esc_html__( 'If the "Project Right Box" is empty then the "Project Left Box" will take the full width.', 'resta-companion' ),
			),
			array(
				'id'    => $resta_prefix . 'project_right_txt',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Project Right Box', 'resta-companion' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'resta_page_metabox' );
