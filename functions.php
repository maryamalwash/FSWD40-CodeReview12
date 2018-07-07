<?php

require_once ('wp-bootstrap-navwalker.php');

function wpd_theme_setup() {

	add_theme_support('post-thumbnails');

	register_nav_menus(array(
			'primary' => __('primary menu')

		));
}
add_action('after_setup_theme', 'wpd_theme_setup');

//Excerpt length control

function set_excerpt_length() {
	return 40;
}

add_filter('excerpt_length', 'set_excerpt_length');

function wpd_init_widgets($id) {
	register_sidebar(array(
			'name'          => 'sidebar',
			'id'            => 'sidebar',
			'before_widget' => '<div class="sidebar-module" >',
			'after_widget'  => '</div>',
			'before_title'  => '<h4>',
			'after_title'   => '</h4>',
		));
}

add_action('widgets_init', 'wpd_init_widgets');
