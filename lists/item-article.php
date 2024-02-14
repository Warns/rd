<article id="post-<?php the_ID(); ?>" class="item item-article" <?php //post_class(); ?>>

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
            <?php the_excerpt(); ?>
        </div>
        <div class="item-footer">
            <ul>
                <li>
                <?php echo 'Okuma süresi ' . do_shortcode('[rt_reading_time]') . ' dk'; ?>
                </li>
                <!--
                <li>
                    <?php 

                        $category = get_the_category();
                        if ( $category[0] ) {
                            echo '<a href="' . get_category_link( $category[0]->term_id ) . '">' . $category[0]->cat_name . '</a>';
                        }
                
                    ?>
                </li>
                -->
                <li>
                    <?php echo my_custom_date(get_the_time('j F Y')); ?>
                </li>
                <li>
                    <?php 
                        the_category(", ");
                    ?>
                </li>
            </ul>
        </div>
    </div>

    <?php bookmark_icon(get_the_ID()); ?>

</article>