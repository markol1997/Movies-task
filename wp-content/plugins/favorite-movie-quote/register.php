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


function save_block($post_id) {

	$nonce = $_POST['_favorite_movie_quotes_nonce'] ?? '';
	if (!wp_verify_nonce($nonce, 'favorite_movie_quotes_nonce_action')) {
		return;
	}

	if (isset($_POST['_favorite_movie_quotes'])) {
		update_post_meta($post_id, '_favorite_movie_quotes', wp_kses_post($_POST['_favorite_movie_quotes']));
	}
}
add_action('save_post', 'save_block', 10, 2);
