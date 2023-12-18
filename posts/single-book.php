
<div id="post-<?php the_ID(); ?>" class="post post-book" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
    ?>
    <div class="left">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="right">
        <div class="post-head">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <ul>
                    <li>
                        Read
                    </li>
                </ul>
            </div>
        </div>
        <div class="post-body">
            <?php the_content(); ?>
        </div>
        <div class="post-foot">
            <?php the_tags(''); ?>
        </div>
    </div>
</div>

<section>
        <?php
            get_template_part( 'partials/section', 'head', array("title"=>"Diğer Kitaplar") );

            $args = array(
                'posts_per_page' => 4,
                'category_name' => 'kitaplar',
                'post__not_in' => array($current)
            );

            $query = new WP_Query( $args );
            while ( $query->have_posts() ):
                $query->the_post();
                
                get_template_part( 'lists/item', 'book' );

            endwhile;
        ?>
</section>


