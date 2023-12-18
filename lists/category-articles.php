
<?php 
    get_template_part( 'partials/page', 'head', 
        array(
            "title" => single_term_title('',false),
            "desc" => esc_html( get_the_archive_description() )
        )
    ); 
?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'lists/item', 'article' ); ?>
    <?php endwhile; endif; ?>
    <?php get_template_part( 'nav', 'below' ); ?>