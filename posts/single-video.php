
<div id="post-<?php the_ID(); ?>" class="post post-video" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
    ?>
    <div class="left">
        <div class="embed-video">
            <iframe id="youtube-video" src="<?php echo get_field('youtube_url').'?enablejsapi=1'; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="right">
        <div class="post-head">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <ul>
                    <li class="extend"><?php the_time('j F Y'); ?></li>
                    <li><?php bookmark_icon(get_the_ID()); ?></li>
                </ul>
            </div>
        </div>
        <div class="post-body">
            <?php the_content(); ?>
            <?php
                $table = get_field('time_stamps');

                // function addzero($k){
                //     return $k <= 9 ? "0" . $k : $k;
                // }

                // function timeformat($n){

                //     $hours = floor($n/60/60);
                //     $minutes = floor(($n-($hours*60*60))/60);
                //     $seconds = floor(($n-($hours*60*60)-($minutes*60)));

                //     return $hours . ":" . addzero($minutes) . ":" . addzero($seconds);

                // }

                function timetoseconds($n){
                    $arr = explode(":", $n);
                    $secs = 0;
                    foreach($arr as $key=>$t){
                        $secs += intval($t) * pow(60, (2-$key));
                    }
                    return $secs;
                }
              
                if ( ! empty ( $table ) ) {
              
                      echo '<ul class="timestamps">';
                          foreach ( $table['body'] as $tr ) {
                                $n = 0;
                                echo "<li>";
                                foreach ( $tr as $td ) {
                                if($n == 0){
                                    $time = timetoseconds($td['c']);
                                    echo '<a href="javascript:void(0);" data-time="'. $time .'">';
                                    echo '<svg class="icon" viewBox="0 0 32 32"><use href="' . get_template_directory_uri() .'/assets/icons/icons.svg#time-stamp" /></svg>';
                                    echo '<small>'. $td['c'] .'</small>';
                                }else if($n == 1){
                                    echo '<p>'. $td['c'] .'</p></a>';
                                }
                                $n++;
                                }
                                echo "</li>\n";    
                          }
                      echo '</ul>';
                }
            ?>
        </div>
        
        <?php get_template_part( 'partials/page', 'foot' ); ?>
        
    </div>
</div>

    <section class="video">
        <?php get_template_part( 'partials/section', 'head', array("title"=>"İlgili Videolar") ); ?>
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
                    'category_name' => 'videolar'
                );

                $my_query = new wp_query( $args );

                while( $my_query->have_posts() ) {
                    $my_query->the_post();

                    echo '<div class="box">';
                    get_template_part( 'lists/item', 'video' );
                    echo '</div>';
                }
            }

            $post = $orig_post;
            wp_reset_query();

            // $args = array(
            //     'posts_per_page' => 5,
            //     'category_name' => 'videolar',
            //     'post__not_in' => array($current)
            // );

            // $query = new WP_Query( $args );
            // while ( $query->have_posts() ):
            //     $query->the_post();
                
            //     echo '<div class="box">';
            //     get_template_part( 'lists/item', 'video' );
            //     echo '</div>';

            // endwhile;
        ?>
        </div>
    </section>