<?php
$title = get_sub_field('title');
$text = get_sub_field('text');

?>

<div class="block">

    <div class="block__padding">

        <div class="block__wrap block__wrap--small">

            <div class="block__inner">

                <div class="block__header">

                    <?php if (!empty($title)): ?>

                        <h2 class="block__title h2"><?= $title; ?></h2>

                    <?php endif; ?>

                </div>

                <div class="block__main">

                    <div class="columns">

                        <div class="columns__item columns__item--centered">

                            <?php if (have_rows('skills')): ?>

                                <ul class=" skills js-skills">

                                    <?php while (have_rows('skills')) : the_row(); ?>

                                        <?php $label = get_sub_field('skill_label'); ?>

                                        <li class="skills__item">

                                            <span class="skill-item"><?php the_sub_field('skill'); ?></span>

                                        </li>

                                    <?php endwhile; ?>

                                </ul>

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