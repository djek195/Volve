<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Your_Theme
 */

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
//        the_post_thumbnail();
//        the_title( '<h2>', '</h2>' );
        the_content();
    endwhile;
endif;