
<?php 
    $cat_name = single_term_title('',false);
    $cat_id = get_cat_ID($cat_name);

    get_template_part( 'partials/page', 'head', 
        array(
            "title" => $cat_name,
            "desc" => esc_html( get_the_archive_description() )
        )
    ); 
?>

<div class="list list-col2 articles">
    <div class="list-left">
        <h3>Kategoriler</h3>
        <div class="category">
            <ul>
        <?php
            $categories = get_categories( array( 
                'child_of'  => 1,
            ) );

            if($categories):
                foreach( $categories as $cat ):            
        ?>
                <li><a class="<?php if($cat_id == $cat->term_id) echo 'active'; ?>" href="<?php echo esc_url(get_term_link($cat, $cat->taxonomy)); ?>"><?php echo $cat->name; ?></a></li>
        <?php endforeach; endif; ?>
            </ul>
        </div>
                    
        <h3>Kavramlar</h3>
        <div class="cloud">
            <?php
                wp_tag_cloud(array(
                    'echo' => true,
                    'orderby' => 'count',
                    'order' => 'DESC',
                    'smallest'   => 17,
                    'largest' => 17,
                    'unit' => 'px',
                    'number' => '20'
                ));
            ?>
            <a href="<?php echo home_url('/kavramlar') ?>">...</a>
        </div>
    </div>
    <div class="list-right">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'lists/item', 'article' ); ?>
        <?php endwhile; endif; ?>
        <?php get_template_part( 'nav', 'below' ); ?>
    </div>
</div>
    