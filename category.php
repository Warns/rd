<?php get_header(); ?>

    <?php 

    $cat_name = single_term_title('',false);
    $current = get_cat_ID($cat_name);
    $articles = get_cat_ID('Yazılar');

    if( is_category('yazilar') || cat_is_ancestor_of($articles, $current)){
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