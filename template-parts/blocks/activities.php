<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');
$activity = get_sub_field('activity');

$size = 'illustration';
?>

<div class="block">

	<div class="block__padding">

		<div class="block__wrap block__wrap--small">

			<div class="block__inner">

				<div class="block__header block__header--center">

					<h2 class="block__title">Expertises</h2>

				</div>

				<div class="block__main">

					<?php if (have_rows('activities')) : ?>

						<div class="activities">

							<?php while (have_rows('activities')) : the_row(); ?>

								<?php $icon = get_sub_field('icon'); ?>

								<?php $activity = get_sub_field('activity'); ?>

								<?php if (!empty($activity)) : ?>

									<div class="activities__item">

										<div class="activity">

											<?php if (!empty($icon)) : ?>

												<div class="activity__icon-container">

													<svg class="activity__icon icon">
														<use xlink:href="<?php echo esc_url(home_url('/wp-content/themes/sjoerdvermeijden/assets/dist/svg/svg-sprite.svg#' . $icon)); ?>"></use>
													</svg>

												</div>

											<?php endif; ?>

											<div class="activity__content">

												<h3 class="activity__title"><?php echo $activity['title']; ?></h3>

												<p class="activity__content">
													<?php echo $activity['text']; ?>
												</p>

											</div>

										</div>

									</div>

								<?php endif; ?>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</div>