<?php
$text = get_field('panorama_text');
?>

<div class="panorama js-panorama">

	<div class="panorama__container">

		<div class="wrap">

			<div class="columns">

				<div class="columns__item columns__item--large">
					<h1 class="panorama__title">Front-end developer</h1>

					<?php if(!empty ($text)) : ?>
						<span class="panorama__subtitle"><?php echo $text; ?></span>
					<?php endif; ?>

				</div>

				<div class="columns__item columns__item--small">

				</div>

			</div>

		</div>

	</div>

</div>
