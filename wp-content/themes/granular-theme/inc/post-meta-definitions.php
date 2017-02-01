<?php

add_filter( 'cmb_meta_boxes', 'cmb_video_metaboxes' );

function cmb_video_metaboxes( array $meta_boxes ) {

	$prefix = '_cdh_';
	$meta_boxes[] = array(
		'id'         => 'video_meta',
		'title'      => 'Video Information',
		'pages'      => array( 'video', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Video URL',
				'desc' => 'Paste the video embed url (just the URL) here.',
				'id'   => $prefix . 'video_id',
				'type' => 'text',
			),
		),
	);
	$meta_boxes[] = array(
		'id'         => 'brochure_meta',
		'title'      => 'Brochure Information',
		'pages'      => array( 'brochure', ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Image',
				'desc' => '',
				'id'   => $prefix . 'brochure_img',
				'type' => 'file',
			),
			array(
				'name' => 'PDF Text',
				'desc' => '',
				'id'   => $prefix . 'brochure_pdf_txt',
				'type' => 'text',
			),
			array(
				'name' => 'PDF URL',
				'desc' => '',
				'id'   => $prefix . 'brochure_pdf_url',
				'type' => 'file',
			),
			array(
				'name' => 'Secondary Link Text',
				'desc' => 'Optional',
				'id'   => $prefix . 'brochure_link_txt',
				'type' => 'text',
			),
			array(
				'name' => 'Secondary Link URL',
				'desc' => 'Optional',
				'id'   => $prefix . 'brochure_link_url',
				'type' => 'file',
			),
		),
	);
	return $meta_boxes;
}


add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );

function cmb_initialize_cmb_meta_boxes() {

	if ( ! class_exists( 'cmb_Meta_Box' ) )
		require_once 'cmb/init.php';

}