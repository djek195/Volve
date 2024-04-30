<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alkima
 */

get_header();
?>

    <main id="primary" class="site-main container">

        <?php
        the_post();
        get_template_part('template-parts/single', get_post_type());
        ?>

    </main><!-- #main -->

<?php
get_footer();