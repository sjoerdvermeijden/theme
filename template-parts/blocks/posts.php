<?php
$title = get_sub_field('title');
$image = get_sub_field('image');
$size = 'post-image';
?>

<div class="block">

	<div class="block__padding">

		<div class="block__wrap">

			<div class="block__inner">

				<?php if (!empty($title)) : ?>

					<div class="block__header block__header--center">

						<h2 class="block__title">Blog</h2>

					</div>

				<?php endif; ?>

				<div class="block__main block__main--center">

					<div class="news-items">

						<?php
						$args = array(
							'post_type'              => array('post'),
							'posts_per_page'         => '2'
						);

						// The Query
						$query = new WP_Query($args);
						?>

						<?php if ($query->have_posts()) : ?>

							<?php while ($query->have_posts()) : ?>
								<?php $query->the_post(); ?>

								<div class="news-items__item">

									<div href="<?php the_permalink(); ?>" class="news-item">

										<a href="<?php the_permalink(); ?>" class="news-item__image-link">

											<?php if (has_post_thumbnail()) : ?>

												<figure class="news-item__image">
													<?php echo wp_get_attachment_image(get_post_thumbnail_id(), $size); ?>
												</figure>

											<?php endif; ?>

										</a>

										<div class="news-item__content">

											<a href="" class="news-item__link">
												<h3 class="news-item__title"><?php the_title(); ?></h3>
											</a>

											<div class="news-item__date">
												<span class="news-item__icon icon">
													<svg>
														<use xlink:href="<?php echo esc_url(home_url('/wp-content/themes/sjoerdvermeijden/assets/dist/svg/svg-sprite.svg#calendar')); ?>"></use>
													</svg>
												</span>
												<span class="news-item__label"><?php the_date('n F Y'); ?></span>
											</div>

										</div>

									</div>

								</div>

							<?php endwhile; ?>

						<?php endif; ?>

						<?php wp_reset_postdata(); ?>

					</div>

				</div>

				<div class="block__footer">
					<a href="<?php echo home_url('/berichten'); ?>" class="news-items__link button">Alle berichten</a>
				</div>

			</div>

		</div>

	</div>

</div>