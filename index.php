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
 * @package sjoerdvermeijden
 */

get_header();
?>

<main class="main">

	<div class="block block--single">

		<div class="block__padding">

			<div class="block__wrap">

				<?php get_template_part('template-parts/breadcrumbs'); ?>

				<div class="block__main">

					<div class="columns">

						<div class="columns__item columns__item--small">
							<?php get_template_part('template-parts/sidebar'); ?>
						</div>

						<div class="columns__item columns__item--large">

							<div class="post-items">

								<h1 class="post-items__title">Blog</h1>

								<?php
								$args = array(
									'post_type'              => array('post'),
									'nopaging'               => false,
									'posts_per_page'         => '12',
									'posts_per_archive_page' => '12',
								);

								// The Query
								$query = new WP_Query($args);
								?>

								<?php if ($query->have_posts()) : ?>
									<?php while ($query->have_posts()) : ?>
										<?php $query->the_post(); ?>

										<div class="post-items__item">

											<div class="post-item">

												<h3 class="post-item__title"><?php the_title(); ?></h3>
												<div class="post-item__date">
													<span class="post-item__icon icon">
														<svg>
															<use xlink:href="<?php echo esc_url(home_url('/wp-content/themes/sjoerdvermeijden/assets/dist/svg/svg-sprite.svg#calendar')); ?>"></use>
														</svg>
													</span>
													<span class="post-item__label"><?= get_the_date(); ?></span>
												</div>
												<p class="post-item__excerpt"><?php echo get_the_excerpt(); ?></p>
												<a href="<?php the_permalink(); ?>" class="post-item__link">Lees verder</a>

											</div>

										</div>

									<?php endwhile; ?>
								<?php endif; ?>

								<?php wp_reset_postdata(); ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	</div>

</main><!-- #main -->

<?php
get_footer();
