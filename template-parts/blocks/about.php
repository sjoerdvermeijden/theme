<?php
$title = get_sub_field('title');
$content = get_sub_field('content');
$image = get_sub_field('image');

$size = 'about';
?>

<div class="block">

	<div class="block__background-illustration">
		<svg xmlns="http://www.w3.org/2000/svg" width="323.89" height="694.001" viewBox="84.565 -227.001 323.89 694.001">
			<path opacity=".5" fill="#8B977E" d="M84.565-201.002L408.455 133.5 84.565 467v-668.002z" />
			<path fill="#8B977E" d="M84.565-228.001l323.889 334.5L84.565 440v-668.001z" />
		</svg>
	</div>

	<div class="block__padding block__padding--small">

		<div class="block__wrap">

			<div class="block__inner">

				<div class="block__main">

					<div class="columns">

						<div class="columns__item columns__item--vertically-centered columns__item--horizontally-centered">

							<?php if (!empty($image)) : ?>

								<figure class="columns__image js-image">
									<?php echo wp_get_attachment_image($image, $size); ?>
								</figure>

							<?php endif; ?>

						</div>

						<div class="columns__item columns__item--vertically-centered">

							<div class="about">

								<?php if (!empty($title)) : ?>

									<h2 class="about__title"><?php echo $title; ?></h2>

								<?php endif; ?>

								<?php echo $content; ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>