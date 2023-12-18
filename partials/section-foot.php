<div class="section-foot">
    <a class="button" href="
        <?php

            if( $args['slug'] )
                $id = get_cat_ID( $args['slug'] ) > 0 ? get_cat_ID( $args['slug'] ) : 1;
                echo get_category_link( $id );
        ?>
    ">
        Tüm <?php echo $args["title"]; ?>
    </a>
</div>