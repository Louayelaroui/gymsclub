<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gymsclub
 */

get_header();
?>

    <main id="primary" class="site-main">

        <?php get_template_part('partials/hero-section')?>
        <?php get_template_part('partials/booking-section')?>
        <?php get_template_part('partials/about-section')?>
        <?php get_template_part('partials/counter-section')?>
        <?php get_template_part('partials/rooms-section')?>
        <?php get_template_part('partials/about-section')?>
<!--        --><?php //get_template_part('partials/gallery-section')?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
