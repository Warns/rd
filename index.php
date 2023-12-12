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

<?php foreach( $home_queries as $q ) : 
        get_template_part( 'partials/section', 'head', $q );

        $args = array(
            'posts_per_page' => $q['number'],
            'category_name' => $q['slug']
        );

        $query = new WP_Query( $args );
        while ( $query->have_posts() ):
            $query->the_post();

            get_template_part( 'lists/item', $q['name'] );
            
            // the_title( '<h4></h4>' );

        endwhile;
?>
<?php endforeach; ?>

<?php get_footer(); ?>