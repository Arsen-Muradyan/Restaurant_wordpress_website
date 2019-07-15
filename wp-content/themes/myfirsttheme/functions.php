<?php

function connect_resources(){
	wp_enqueue_style("style", get_stylesheet_uri() );
}

add_action("wp_enqueue_scripts", "connect_resources");

function custom_theme_setup(){

	register_nav_menus( array(
		"top_menu" => __("Top Menu"),
	));

	add_theme_support("post-thumbnails");

	add_theme_support("post-formats", array("aside", "link", "gallery") );

	add_image_size('small-img', 200, 200, true);
	add_image_size('cover', 2000, 400, array("left", "center") );
}

add_action("after_setup_theme", "custom_theme_setup");



?>
