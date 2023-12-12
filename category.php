<?php get_header(); ?>


    <main id="content">
    <?php 

    if( is_category('yazilar') ){
        get_template_part( 'lists/category', 'articles' );
    }
    else{
        get_template_part( 'lists/category', 'default' );
    }

    ?>
    </main>


<?php get_footer(); ?>