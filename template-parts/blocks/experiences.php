<?php
$title = get_sub_field('title');
?>

<div class="block">

    <div class="block__wrap block__wrap--small">

        <div class="block__padding">

            <div class="block__inner">

                <div class="block__header block__header--center">

                    <?php if (!empty($title)): ?>

                        <h2 class="block__title"><?php echo $title; ?></h2>

                    <?php endif; ?>

                </div>

                <div class="block__main">

                    <?php if (have_rows('experiences')): ?>

                        <div class="experiences">

                            <?php while (have_rows('experiences')) : the_row(); ?>

                                <?php if (have_rows('company')): ?>

                                    <?php while (have_rows('company')): the_row(); ?>

                                        <?php $name = get_sub_field('name'); ?>
                                        <?php $title = get_sub_field('title'); ?>
                                        <?php $year = get_sub_field('year'); ?>

                                        <div class="experiences__item">

                                            <div class="experience">

                                                <?php if (!empty($name)): ?>

                                                    <h3 class="experience__title"><?php echo $name; ?></h3>

                                                <?php endif; ?>

                                                <?php if (!empty($title)): ?>

                                                    <p class="experience__title"><?php echo $title; ?></p>

                                                <?php endif; ?>

                                                <?php if (!empty($year)): ?>

                                                    <p class="experience__year"><?php echo $year; ?></p>

                                                <?php endif; ?>

                                            </div>

                                        </div>

                                    <?php endwhile; ?>

                                <?php endif; ?>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</div>