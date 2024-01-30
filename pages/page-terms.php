<div class="page page-terms">
    <?php 
        get_template_part( 'partials/page', 'head', 
            array(
                "title" => get_the_title(),
            )
        ); 
    ?>
    <div class="page-body">
        <?php
            wp_tag_cloud(array(
                'echo' => true,
                'orderby' => 'name',
                'order' => 'ASC',
                'smallest'   => 17,
                'largest' => 17,
                'unit' => 'px',
                'separator' => '',
            ));
        ?>
    </div>
</div>