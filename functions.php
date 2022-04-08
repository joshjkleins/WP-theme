<?php 

function boardgame_register_styles() {
	wp_enqueue_style('framework', get_template_directory_uri() . "/assets/css/custom-framework.css", array(), '1.0', 'all');
	wp_enqueue_style('custom-styles', get_template_directory_uri() . "/assets/css/custom-styles.css", array(), '1.0', 'all');
	wp_enqueue_style('animations', get_template_directory_uri() . "/assets/css/animations.css", array(), '1.0', 'all');
	wp_enqueue_style('header', get_template_directory_uri() . "/assets/css/header.css", array(), '1.0', 'all');
	wp_enqueue_style('footer', get_template_directory_uri() . "/assets/css/footer.css", array(), '1.0', 'all');
	
}

add_action( 'wp_enqueue_scripts', 'boardgame_register_styles');

function boardgame_register_scripts() {
	wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.6.0.min.js', array(), '1.0', true);
	wp_enqueue_script('main', get_template_directory_uri() . "/assets/js/main.js", array(), '1.0', true);
}

add_action( 'wp_enqueue_scripts', 'boardgame_register_scripts' );
