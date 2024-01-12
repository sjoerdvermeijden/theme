<?php
$title = get_sub_field('title');

?>

<div class="block">

    <div class="block__padding">

        <div class="block__wrap">

            <div class="block__inner">

                <div class="block__header block__header--center">

                    <?php if (!empty($title)) : ?>
                        <h2 class="block__title h2"><?= $title; ?></h2>
                    <?php endif; ?>

                </div>

                <div class="block__main">

                    <?php if (have_rows('werkwijze')) : ?>

                        <div class="standards">

                            <?php while (have_rows('werkwijze')) : the_row(); ?>

                                <div class="standards__item">

                                    <?php $item = get_sub_field('werkwijze_item'); ?>

                                    <?php if (!empty($item)) : ?>

                                        <?php
                                        $title = $item['werkwijze_title'];
                                        $icon = $item['werkwijze_icon'];
                                        $text = $item['werkwijze_text'];
                                        ?>

                                        <div class="standards-item">

                                            <?php if (!empty($icon)) : ?>

                                                <svg class="standards-item__icon icon">
                                                    <use xlink:href="<?php echo esc_url(home_url('/themes/sjoerdvermeijden/assets/dist/svg/svg-sprite.svg#' . $icon)); ?>"></use>
                                                </svg>

                                            <?php endif; ?>

                                            <div class="standards-item__content">

                                                <?php if (!empty($title)) : ?>

                                                    <h3 class="standards-item__title h3"><?= $title; ?></h3>

                                                <?php endif; ?>

                                                <?php if (!empty($text)) : ?>

                                                    <p class="standards-item__text"><?= $text; ?></p>

                                                <?php endif; ?>

                                            </div>

                                        </div>

                                    <?php endif; ?>

                                </div>

                            <?php endwhile; ?>

                        </div>

                    <?php endif; ?>

                </div>

            </div>

        </div>

    </div>

</div>