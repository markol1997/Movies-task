<?php
/**
 * The template for displaying all single movies
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-movies
 *
 * @package Movies
 */

get_header();

while ( have_posts() ) :
    the_post();

    get_template_part( 'template-parts/content', 'single-movie' );
endwhile;

get_footer();
