<?php
/**
* Template Name: Contact Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/

get_header();
?>

	<?php
	$text = get_field('contact_text', 'option');
	$image = get_field('contact_image', 'option');
	$size = 'contact';
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

								<h1 class="contact-title">Contact</h1>

								<?php if(!empty ($text)) : ?>

									<div class="contact-text">

										<?php echo $text; ?>

									</div>

								<?php endif; ?>

								<?php echo do_shortcode( '[contact-form-7 id="188" title="Contact form 1"]' ); ?>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</main><!-- #main -->

<?php
get_footer();

