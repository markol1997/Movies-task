<?php

function my_block_register_meta()
{
	register_meta('post', '_favorite_movie_quotes', array(
		'single' => true,
		'type' => 'string',
		'show_in_rest' => array(
			"schema" => array(
				"type" => 'string',
				"format" => 'html'
			)
		),
		'sanitize_callback' => 'wp_kses_post',
		'auth_callback' => function () {
			return true;
		}
	));
}

add_action('init', 'my_block_register_meta');
