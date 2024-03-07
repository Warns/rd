
<div id="post-<?php the_ID(); ?>" class="post post-article" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
    ?>
    <div class="left">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="right">
        <div class="inside">
            <div class="post-head">
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <ul>
                        <li>
                            <?php echo 'Okuma süresi ' . do_shortcode('[rt_reading_time]') . ' dk'; ?>
                        </li>
                        <li><?php the_time('j F Y'); ?></li>
                        <li>Son güncelleme <?php echo get_the_modified_date('j F Y'); ?></li>
                        <li class="extend"><?php the_category(", "); ?></li>
                        <li><?php bookmark_icon(get_the_ID()); ?></li>
                    </ul>
                </div>
            </div>
            <div class="post-body">
                <?php the_content(); ?>
            </div>
            
            <?php get_template_part( 'partials/page', 'foot' ); ?>

        </div>
        <div class="sidebar">
        </div>
        
    </div>
</div>

    <section class="article">
        <?php get_template_part( 'partials/section', 'head', array("title"=>"İlgili Yazılar") ); ?>
        <div class="section-body">
        <?php

            $args = array(
                'posts_per_page' => 3,
                'category_name' => 'yazilar',
                'post__not_in' => array($current)
            );

            $query = new WP_Query( $args );
            while ( $query->have_posts() ):
                $query->the_post();
                
                echo '<div class="box">';
                get_template_part( 'lists/item', 'article' );
                echo '</div>';

            endwhile;
        ?>
        </div>
    </section>


