<?php 

function bita_bootstraping(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');


	register_nav_menus( array(
	    'mainmenu' => __( 'Main Menu', 'bita' ),
		'footermenu' => __( 'Footer Menu', 'bita' )
	) );

}
add_action('after_setup_theme', 'bita_bootstraping');

function bita_assets(){
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('maincss', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'bita_assets');





















?>