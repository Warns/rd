<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php 

    $cats = get_the_category();

    if( in_category('yazilar') || $cats[0]->parent == 1){
        get_template_part( 'posts/single', 'article' );
    }
    else if( in_category('videolar') ){
        get_template_part( 'posts/single', 'video' );
    }
    else if( in_category('kitaplar') ){
        get_template_part( 'posts/single', 'book' );
    }
    else if( in_category('konular') ){
        get_template_part( 'posts/single', 'topic' );
    }
    else{
        get_template_part( 'posts/single', 'default' );
    }

    ?>


<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>


<?php get_footer(); ?>