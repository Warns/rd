
<?php 
    get_template_part( 'partials/page', 'head', 
        array(
            "title" => single_term_title('',false),
            "desc" => esc_html( get_the_archive_description() )
        )
    ); 
?>

<div class="list list-col2 videos">
    <div class="list-left">
        <h3>Kavramlar</h3>
        <div class="cloud">
            <?php
                wp_tag_cloud(array(
                    'echo' => true,
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'smallest'   => 17,
                    'largest' => 17,
                    'unit' => 'px'
                ));
            ?>
        </div>
    </div>
    <div class="list-right">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="box">
                <?php get_template_part( 'lists/item', 'video' ); ?>
            </div>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
    
</div>
    