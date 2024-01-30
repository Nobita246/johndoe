<?php

function theme_setup()
{
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');

function theme_custom_excerpt_length($length)
{
	return 20;
}
add_filter('excerpt_length', 'theme_custom_excerpt_length');
