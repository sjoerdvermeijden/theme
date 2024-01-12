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

								<div class="project-single">

								<?php
								$link = get_field('link');
								?>

								<h1 class="h1 project-single__title"><?php the_title(); ?></h1>

								<div class="project-single__content"><?php echo get_the_content(); ?></div>

								<div class="project-single__items">

									<h3 class="project-single__label">Gebruikte tools:</h3>

									<?php if( have_rows('tools') ): ?>

										<ul class="project-single__tools">

											<?php while( have_rows('tools') ) : the_row(); ?>

												<?php $tool = get_sub_field('tool'); ?>

												<li class="project-single__tool"><?php echo $tool; ?></li>

											<?php endwhile; ?>

										</ul>

									<?php endif; ?>

								</div>

								<?php if(!empty ($link)): ?>

									<a href="<?= $link; ?>" target="_blank" class="project-single__link button">Zie <?php the_title(); ?></a>

								<?php endif; ?>

							</div>

						</div>

					</div>

                </div>

            </div>

        </div>

    </main><!-- #main -->

<?php
get_footer();
