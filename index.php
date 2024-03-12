<?php get_header(); ?>

<?php
    // if ( have_posts() ) : 
    //     while ( have_posts() ) : the_post();
    //         get_template_part( 'entry' );
    //         comments_template();
    //     endwhile; 
    // endif;

    // get_template_part( 'nav', 'below' );

    $home_queries = array(
        array( 
            'title' => 'Yazılar', 
            'slug' => 'yazilar',
            'name' => 'article',
            'number' => 5
        ),
        array( 
            'title' => 'Videolar', 
            'slug' => 'videolar',
            'name' => 'video',
            'number' => 7
        ),
        array( 
            'title' => 'Kitaplar', 
            'slug' => 'kitaplar',
            'name' => 'book',
            'number' => 4
        ),
        array( 
            'title' => 'Konular', 
            'slug' => 'konular',
            'name' => 'topic',
            'number' => 4
        ),
    )
?>

<section class="col-two">
<section class="tags">
    <div>
        <?php
            get_template_part('partials/section', 'head', array('title'=>'Kavramlar'));

            wp_tag_cloud(array(
                'echo' => true,
                'orderby' => 'count',
                'order' => 'DESC',
                'smallest'   => 17,
                'largest' => 17,
                'unit' => 'px',
                'separator' => ' / ',
                'number' => '15'
            ));
        ?>
        <div class="section-foot left">
            <a class="button" href="<?php echo home_url('/kavramlar') ?>">Tüm Kavramlar</a>
        </div>
    </div>
</section>

<?php foreach( $home_queries as $key => $q ) : ?>
    <section class="<?php echo $q['name']; ?>">
        <?php get_template_part( 'partials/section', 'head', $q); ?>
        <div class="section-body">
            <?php
                $args = array(
                    'posts_per_page' => $q['number'],
                    'category_name' => $q['slug']
                );

                $query = new WP_Query( $args );
                while ( $query->have_posts() ):
                    $query->the_post();
                    
                    echo '<div class="box">';
                    get_template_part( 'lists/item', $q['name'] );
                    echo '</div>';

                endwhile;
            ?>
        </div>
        <?php get_template_part( 'partials/section', 'foot', $q ); ?>
    </section>
        <?php
            if ($key === array_key_first($home_queries)){
                echo '</section>';
            }
        ?>
<?php endforeach; ?>

<?php get_footer(); ?>