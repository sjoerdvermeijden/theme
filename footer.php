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

			<div class="footer__social">

				<div class="social-media">

					<?php if (have_rows('social_items', 'option')) : ?>

						<?php while (have_rows('social_items', 'option')) : the_row(); ?>

							<?php
							$label = get_sub_field('social_label', 'option');
							$link = get_sub_field('social_link', 'option');
							?>

							<?php if (!empty($label)) : ?>

								<div class="social-media__item social-media__item--<?= $label; ?>">

									<a href="<?= $link; ?>" class="social-item" target="_blank">

										<div class="social-item__icon icon">

											<svg>
												<use xlink:href="<?php echo esc_url(home_url('/themes/sjoerdvermeijden/assets/dist/svg/svg-sprite.svg#' . $label)); ?>"></use>
											</svg>

										</div>

									</a>

								</div>

							<?php endif; ?>

						<?php endwhile; ?>

					<?php endif; ?>

				</div>

			</div>

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