<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sjoerdvermeijden
 */

?>

<footer class="footer">

	<div class="footer__wrap">

		<div class="footer__inner">

			<?php if (have_rows('contact_items', 'option')) : ?>

				<ul class="contact-items">

					<?php while (have_rows('contact_items', 'option')) : the_row(); ?>

						<?php
						$label = get_sub_field('contact_label', 'option');
						$link = get_sub_field('contact_link', 'option');
						?>

						<?php if (!empty($label)) : ?>

							<li class="contact-items__item">

								<a href="<?= $link; ?>" class="contact-item" target="_blank">

									<?php echo $label; ?>

								</a>

							</li>

						<?php endif; ?>

					<?php endwhile; ?>

				</ul>

			<?php endif; ?>

			<div class="footer__content">

				<p class="copyright">Handmade by me - <span>sjoerdvermeijden.nl</span> &copy; <?php echo date('Y'); ?></p>

			</div>

		</div>

	</div>

</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109780708-1"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	function gtag() {
		dataLayer.push(arguments);
	}
	gtag('js', new Date());

	gtag('config', 'UA-109780708-1');
</script>

</body>

</html>