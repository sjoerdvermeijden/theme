<?php
$title = get_sub_field('title');
$text = get_sub_field('text');

?>

<div class="block">

    <div class="block__background-illustration block__background-illustration--right">
        <svg xmlns="http://www.w3.org/2000/svg" width="323.89" height="695.002" viewBox="70.565 -223 323.89 695.002">
            <path opacity=".5" fill="#AAA" d="M394.455 471.002L70.565 136.501 394.455-197v668.002z" />
            <path fill="#AAA" d="M394.455 445.002L70.565 110.501 394.455-223v668.002z" />
        </svg>
    </div>

    <div class="block__padding">

        <div class="block__wrap block__wrap--small">

            <div class="block__inner">

                <div class="block__header block__header--center">

                    <?php if (!empty($title)): ?>

                        <h2 class="block__title h2"><?= $title; ?></h2>

                    <?php endif; ?>

                </div>

                <div class="block__main">

                    <div class="columns">

                        <div class="columns__item columns__item--centered">

                            <?php if (have_rows('skills')): ?>

                                <div class=" skills js-skills">

                                    <?php while (have_rows('skills')) : the_row(); ?>

                                        <?php $label = get_sub_field('skill_label'); ?>

                                        <div class="skills__item">

                                            <div class="skill-item">
                                                <?php the_sub_field('skill'); ?>
                                            </div>

                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php endif; ?>

                        </div>

                        <div class="columns__item"></div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</div>