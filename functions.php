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
	wp_enqueue_style('featherlightcss', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
	wp_enqueue_style('maincss', get_stylesheet_uri());

	wp_enqueue_script('featherlightjs', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'bita_assets');

function bita_sidebar() {
    register_sidebar( array(
        'name' =>  __('Widget One', 'bita'),
        'id' => 'sidebar1',
        'description' 	=> __('You can add your widgets', 'bita'),
        'before_widget' => '<div class="widget_div">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );

    register_sidebar( array(
        'name' =>  __('Widget Two', 'bita'),
        'id' => 'sidebar2',
        'description' 	=> __('You can add your widgets', 'bita'),
        'before_widget' => '<div class="widget_div">',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>',
    ) );
}
add_action('widgets_init', 'bita_sidebar');





















?>