<div class="post">
    <h1 class="post__title h1"><?php the_title(); ?></h1>
    <div class="post__date">
        <span class="post__icon icon">
            <svg>
                <use xlink:href="<?php echo esc_url( home_url( '/app/themes/sjoerdvermeijden/assets/dist/svg/svg-sprite.svg#calendar' ) ); ?>"></use>
            </svg>
        </span>
        <span class="post__label"><?php the_date('n F Y'); ?></span>
    </div>
    <p class="post__content"><?php the_content(); ?></p>
</div>
