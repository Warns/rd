
<div id="post-<?php the_ID(); ?>" class="post post-topic" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
         $arr = get_field_object('posts');
    ?>
    <div class="left">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="right">
        <div class="post-head">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <div class="post-meta">
                <ul>
                    <li>
                        <?php echo sizeof($arr['value']) . ' içerik'; ?>
                    </li>
                    <li><?php the_time('j F Y'); ?></li>
                    <li>Son güncelleme <?php echo get_the_modified_date('j F Y'); ?></li>
                </ul>
            </div>
        </div>
        <div class="post-body">
        <?php
            if( sizeof($arr['value']) > 0 )
            foreach ( $arr['value'] as $key => $q ){
                $post = get_post($q->ID);

                $translate = array(
                    'yazilar' => 'article',
                    'videolar' => 'video',
                    'kitaplar' => 'book',
                    'konular' => 'topic'
                );

                $cat = get_the_category();
                $cat_name = $translate[$cat[0]->slug] ;

                echo '<div class="collection"><span>'.($key+1).'</span>';
                get_template_part( 'lists/item', $cat_name == NULL ? 'article' : $cat_name );
                echo '</div>';
            }
        ?>
        </div>
    </div>
</div>

<section class="topic">
    <?php get_template_part( 'partials/section', 'head', array("title"=>"Diğer Konular") ); ?>
    <div class="section-body">
        <?php

            $args = array(
                'posts_per_page' => 4,
                'category_name' => 'konular',
                'post__not_in' => array($current)
            );

            $query = new WP_Query( $args );
            while ( $query->have_posts() ):
                $query->the_post();
                
                get_template_part( 'lists/item', 'topic' );

            endwhile;
        ?>
    </div>
</section>


