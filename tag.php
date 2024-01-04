<?php get_header(); ?>

<?php 
    get_template_part( 'partials/page', 'head', 
        array(
            "title" => single_term_title("Aranan kelime: ", false),
            "desc" => esc_html( get_the_archive_description() )
        )
    ); 
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php 
    if( in_category('yazilar') ){
        get_template_part( 'lists/item', 'article' );
    }
    else if( in_category('videolar') ){
        get_template_part( 'lists/item', 'video' );
    }
    else if( in_category('kitaplar') ){
        get_template_part( 'lists/item', 'book' );
    }
    else if( in_category('konular') ){
        get_template_part( 'lists/item', 'topic' );
    }
    else{
        get_template_part( 'lists/item', 'default' );
    }
?>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>

<?php get_footer(); ?>