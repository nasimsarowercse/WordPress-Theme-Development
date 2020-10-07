<?php 

function bita_child_assets(){
	wp_enqueue_style('parent-style', get_parent_theme_file_uri('/style.css'));
}
add_action('wp_enqueue_scripts', 'bita_child_assets');


function bita_time_today(){
    echo date("y/m/d");
}


?>