<?php get_header(); ?>


	<main class="main">

		<div class="block block--single">

			<div class="block__padding">

				<div class="block__wrap">

					<div class="block__innner">

						<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

						<div class="block__main">

							<div class="columns">

								<div class="columns__item columns__item--small">
									<?php get_template_part( 'template-parts/sidebar' ); ?>
								</div>

								<div class="columns__item columns__item--large">

									<div class="projects">

										<h1 class="projects__title">Projects</h1>

									<?php
									$args = array(
										'post_type'              => array( 'project' ),
									);

									$query = new WP_Query( $args ); ?>

									<?php if ( $query->have_posts() ) : ?>

										<div class="projects__items">

											<?php while ( $query->have_posts() ) : ?>

												<?php $query->the_post(); ?>

												<?php $size = 'project-archive'; ?>

												<div class="projects__item">

													<a href="<?php the_permalink(); ?>" class="container">

														<?php if( has_post_thumbnail() ) : ?>

															<figure class="container__image">

																<?php echo wp_get_attachment_image( get_post_thumbnail_id(), $size ); ?>

															</figure>

														<?php endif; ?>

														<div class="container__content">

															<h3 class="container__title"><?php the_title(); ?></h3>

															<div class="container__text"><?php the_excerpt(); ?></div>

														</div>

													</a>

												</div>

											<?php endwhile; ?>

										</div>

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
