<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sjoerdvermeijden
 */

get_header();
?>

	<main class="main">

		<?php get_template_part( 'template-parts/blocks/panorama' ); ?>

		<?php get_template_part( 'template-parts/flexible-content' ); ?>

	</main>

<?php
get_footer();
