<article id="post-<?php the_ID(); ?>" class="item item-video" <?php //post_class(); ?>>

    <div class="left">
        <?php
            if(get_post_time() > strtotime('-2 week')){
                echo '<span>Yeni</span>';
            }
        ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="right">
        <div class="item-body">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title('<h3>', '</h3>'); ?></a>
            <div class="excerpt">
                <?php the_excerpt(); ?>
            </div>
            <div class="terms">
                <?php the_tags(''); ?>
            </div>
        </div>
        <div class="item-footer">
            <ul>
                <li class="zero">
                    <svg class="icon" viewBox="0 0 32 32">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#play" />
                    </svg>
                </li>
                <li>
                    <?php echo get_field('duration'); ?>
                </li>
                <li><?php the_time('j F Y'); ?></li>
            </ul>
        </div>
    </div>

    <?php bookmark_icon(get_the_ID()); ?>

</article>