<?php
$title = get_sub_field('title');

?>

<div class="block">

    <div class="block__background-illustration block__background-illustration--right">
        <svg xmlns="http://www.w3.org/2000/svg" width="323.89" height="695.002" viewBox="70.565 -223 323.89 695.002">
            <path opacity=".5" fill="#AAA" d="M394.455 471.002L70.565 136.501 394.455-197v668.002z" />
            <path fill="#AAA" d="M394.455 445.002L70.565 110.501 394.455-223v668.002z" />
        </svg>
    </div>

    <div class="block__padding">

        <div class="block__wrap">

            <div class="block__inner">

                <div class="block__header block__header--center">

                    <?php if (!empty($title)): ?>

                        <h2 class="block__title"><?php echo $title; ?></h2>

                    <?php endif; ?>

                </div>

                <div class="block__main">

                    <?php if (have_rows('projecten')): ?>

                        <div class="project-items">

                            <?php while (have_rows('projecten')) : the_row(); ?>

                                <?php $posts = get_sub_field('project'); ?>

                                <?php if ($posts): ?>

                                    <?php foreach ($posts as $post): // variable must be called $post (IMPORTANT) 
                                    ?>

                                        <?php setup_postdata($post); ?>

                                        <div class="project-items__item">

                                            <?php get_template_part('template-parts/items/project'); ?>

                                        </div>

                                    <?php endforeach; ?>

                                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly 
                                    ?>

                                <?php endif; ?>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>


        </div>

    </div>

</div>