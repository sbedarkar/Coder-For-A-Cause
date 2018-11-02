<?php 
/*
	==========================================
	 Include scripts
	==========================================
*/

function nononsense_script_enqueue(){

wp_enqueue_style('w3container', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', array(), '3.3.7', 'all');
	 //wp_enqueue_style('w3container', 'https://www.w3schools.com/w3css/4/w3.css', array(), '4.11', 'all');
	wp_enqueue_style('social-media-icons', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css", array(), false, 'all');
	wp_enqueue_style('fonts-googleapis', "https://fonts.googleapis.com/css?family=Raleway", array(), false, 'all');
	wp_enqueue_style('fonts-Awesome', "https://fonts.googleapis.com/css?family=Raleway", array(), false, 'all');
	wp_enqueue_style('customestyle', get_template_directory_uri() . '/css/nononsense.css', array(), '1.0.0', 'all');	

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '3.3.7', true);

}
add_action('wp_enqueue_scripts','nononsense_script_enqueue');


function nononsense_theme_setup() {
	
	add_theme_support('menus');
	
	register_nav_menu('primary', 'Primary Header Navigation');
	register_nav_menu('secondary', 'Footer Navigation');
	
}

add_action('init', 'nononsense_theme_setup');

/*
	==========================================
	 Theme support function
	==========================================
*/

add_theme_support('custom-header');
add_theme_support('post-thumbnails');
add_theme_support('post-formats',array('aside','image','video'));


