<article id="post-<?php the_ID(); ?>" class="item item-topic" <?php //post_class(); ?>>

    <div class="left">
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_post_thumbnail(); ?></a>
    </div>
    <div class="right">
        <div class="item-body">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title('<h3>', '</h3>'); ?></a>
            <?php the_excerpt(); ?>
        </div>
        <div class="item-footer">
            <ul>
                <li>
                    <?php 

                        $arr = get_field_object('posts');
                        echo sizeof($arr['value']) . ' içerik';
                
                    ?>
                </li>
                <li><?php the_time('j F Y'); ?></li>
            </ul>
        </div>
    </div>

</article>