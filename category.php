<?php get_header(); ?>

    <?php 

    if( is_category('yazilar') ){
        get_template_part( 'lists/category', 'articles' );
    }
    else if( is_category('videolar') ){
        get_template_part( 'lists/category', 'videos' );
    }
    else if( is_category('kitaplar') ){
        get_template_part( 'lists/category', 'books' );
    }
    else if( is_category('konular') ){
        get_template_part( 'lists/category', 'topics' );
    }
    else{
        get_template_part( 'lists/category', 'default' );
    }

    ?>

<?php get_footer(); ?>