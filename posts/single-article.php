
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

            $orig_post = $post;
            global $post;
            $tags = wp_get_post_tags($post->ID);

            if ($tags) {
                $tag_ids = array();
                foreach( $tags as $individual_tag ) 
                    $tag_ids[] = $individual_tag->term_id;

                $args=array(
                    'tag__in' => $tag_ids,
                    'post__not_in' => array($post->ID),
                    'posts_per_page'=>5, // Number of related posts to display.
                    'caller_get_posts'=>1,
                    'category_name' => 'yazilar'
                );

                $my_query = new wp_query( $args );

                while( $my_query->have_posts() ) {
                    $my_query->the_post();

                    echo '<div class="box">';
                    get_template_part( 'lists/item', 'article' );
                    echo '</div>';
                }
            }

            $post = $orig_post;
            wp_reset_query();

            // $args = array(
            //     'posts_per_page' => 5,
            //     'category_name' => 'yazilar',
            //     'post__not_in' => array($current)
            // );

            // $query = new WP_Query( $args );
            // while ( $query->have_posts() ):
            //     $query->the_post();
                
            //     echo '<div class="box">';
            //     get_template_part( 'lists/item', 'article' );
            //     echo '</div>';

            // endwhile;
        ?>
        </div>
    </section>


