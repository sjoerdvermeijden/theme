<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package sjoerdvermeijden
 */

get_header();
?>

	<main class="main">

		<div class="block block--single">

			<div class="block__padding">

				<div class="block__wrap">

					<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

					<div class="block__main">

						<div class="columns">

							<div class="columns__item columns__item--small">
								<?php get_template_part( 'template-parts/sidebar' ); ?>
							</div>

							<div class="columns__item columns__item--large">

								<?php while ( have_posts() ) :
									the_post();

									get_template_part( 'template-parts/items/post' );

									endwhile; // End of the loop.
								?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</main><!-- #main -->

<?php
get_footer();
