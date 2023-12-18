
<div id="post-<?php the_ID(); ?>" class="post post-video" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
    ?>
    <div class="left">
        <div class="embed-video">
            <iframe src="<?php echo get_field('youtube_url'); ?>" frameborder=0 allowfullscreen></iframe>
        </div>
    </div>
    <div class="right">
        <div class="post-head">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <ul>
                    <li><?php the_time('j F Y'); ?></li>
                </ul>
            </div>
        </div>
        <div class="post-body">
            <?php the_content(); ?>
        </div>
        <div class="post-foot">
            <?php the_tags('Kavramlar: '); ?>
        </div>
    </div>
</div>

    <section>
        <?php
            get_template_part( 'partials/section', 'head', array("title"=>"İlgili Videolar") );

            $args = array(
                'posts_per_page' => 5,
                'category_name' => 'videolar',
                'post__not_in' => array($current)
            );

            $query = new WP_Query( $args );
            while ( $query->have_posts() ):
                $query->the_post();
                
                get_template_part( 'lists/item', 'video' );

            endwhile;
        ?>
    </section>


