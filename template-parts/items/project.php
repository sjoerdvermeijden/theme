<?php
$position = get_sub_field('position');
?>

<div class="project-item <?php if( $position ) : ?>project-item--<?php echo $position; endif ?>">

	<?php
	$size = 'project-image';
	?>

	<?php if( has_post_thumbnail() ) : ?>

		<a href="<?php the_permalink(); ?>" class="project-item__image-link">

			<figure class="project-item__image">

				<?php echo wp_get_attachment_image( get_post_thumbnail_id(), $size ); ?>

			</figure>

		</a>

	<?php endif; ?>

    <div class="project-item__item">

        <div class="project-item__content">

			<a href="<?php the_permalink(); ?>" class="project-item__link">
				<h2 class="project-item__title"><?php the_title(); ?></h2>
			</a>

            <p class="project-item__excerpt"><?= get_the_excerpt(); ?></p>

            <div class="project-item__categories">
                <?php $terms = wp_get_post_terms( get_the_ID(), 'category', array( 'order' => 'DESC') ); ?>

                <?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) : ?>

                    <ul class="project-categories">

                        <?php foreach ( $terms as $term ) : ?>

                            <li class="project-categories__item project-categories__item--<?= $term->slug; ?>">
                                <div class="project-category">
                                    <span class="project-category__label"><?= $term->name; ?></span>
                                </div>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>

            </div>

			<a href="<?php the_permalink(); ?>" class="project-item__link button">Bekijk case</a>

        </div>

    </div>

</div>
