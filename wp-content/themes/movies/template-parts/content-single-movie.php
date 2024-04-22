<?php
/**
 * The template part for displaying single movies content
 *
 * @package Movies
 */

?>

<article id="post-<?php the_ID(); ?>">
    <div>
        <h1><?php echo the_title() ?></h1>
        <div>
            <?php the_content(); ?>
        </div>
    </div>
    <div>
        <h2><?php echo get_post_meta( get_the_ID(), 'movie_title', true );?></h2>
    </div>
</article>
