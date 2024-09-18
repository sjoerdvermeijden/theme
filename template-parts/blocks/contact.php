<?php

$image = get_sub_field('contact_image');
$text = get_field('contact_text', 'option');
$size = 'contact';
?>

<div class="block">

	<div class="block__padding block__padding--contact">

		<div class="block__wrap block__wrap--small">

			<div class="block__inner">

				<div class="block__header">

					<h2 class="block__title">Contact</h2>

				</div>

				<div class="block__main">

					<?php if (!empty($text)) : ?>

						<div class="contact-text">

							<?php echo $text; ?>

						</div>

					<?php endif; ?>

				</div>

			</div>

		</div>

	</div>

</div>