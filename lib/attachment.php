<?php 

define( 'ATTACHMENTS_SETTINGS_SCREEN', false );
add_filter( 'attachments_default_instance', '__return_false' );

function bita_attachment($attachments){
	$fields         = array(
    array(
      		'name'      => 'title',                         
      		'type'      => 'text',                          
      		'label'     => __( 'Title', 'bita' ),                           
    	 ),
	);

	$args = array(
	    'label'         => 'Feature Image',
	    'post_type'     => array( 'post'),
	    'filetype'      => array('image'),
	    'note'          => 'Add Slider Image',
	    'button_text'   => __( 'Attach Files', 'bita' ),
	    'fields'        => $fields,
    );

  $attachments->register( 'slider', $args );
}
add_action( 'attachments_register', 'bita_attachment' );












?>