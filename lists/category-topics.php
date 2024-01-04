
<?php 
    get_template_part( 'partials/page', 'head', 
        array(
            "title" => single_term_title('',false),
            "desc" => esc_html( get_the_archive_description() )
        )
    ); 
?>

<div class="list list-col1 topics">
    <div class="list-right">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="box">
                <?php get_template_part( 'lists/item', 'topic' ); ?>
            </div>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
</div>
    