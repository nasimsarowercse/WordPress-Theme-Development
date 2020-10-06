<?php 

if(class_exists('Attachments')){
    require_once('lib/attachment.php');
}

function bita_bootstraping(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));


	register_nav_menus( array(
	    'mainmenu' => __( 'Main Menu', 'bita' ),
		'footermenu' => __( 'Footer Menu', 'bita' )
	) );

}
add_action('after_setup_theme', 'bita_bootstraping');

function bita_assets(){
	wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('featherlightcss', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css');
    wp_enqueue_style('tiny', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.3/tiny-slider.css');
    wp_enqueue_style('dashicons');
	wp_enqueue_style('maincss', get_stylesheet_uri());

	wp_enqueue_script('featherlightjs', '//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('tinyjs', '//cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js', null, '0.0.1', true);
    wp_enqueue_script('mainjs', get_theme_file_uri('/assets/js/main.js'), null, array('jquery', 'featherlight-js'), true);

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