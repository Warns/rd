<article id="post-<?php the_ID(); ?>" class="item item-book" <?php //post_class(); ?>>

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
                    <a class="button light dir" href="">
                        <svg class="icon" viewBox="0 0 32 32">
                            <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#read" />
                        </svg>
                        Online oku
                    </a>
                </li>
                <li>
                    <a class="button light dir" href="">
                        <svg class="icon" viewBox="0 0 32 32">
                            <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#download" />
                        </svg>
                        PDF indir
                    </a>
                </li>
            </ul>
        </div>
    </div>

</article>