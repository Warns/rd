<?php

$id = $_GET['post_ids'];

if($id) : ?>

<div class="page-body">
<?php

    $ids = explode(",", $id);

    foreach( $ids as $i ){

        $post = get_post($i);

        $translate = array(
            'yazilar' => 'article',
            'videolar' => 'video',
            'kitaplar' => 'book',
            'konular' => 'topic'
        );

        $cat = get_the_category();

        $cat_name = $translate[$cat[0]->slug] ;

        echo '<div class="collection">';
        get_template_part( 'lists/item', $cat_name == NULL ? 'article' : $cat_name );
        echo '</div>';

    }

    // var_dump($ids);
?>
</div>

<?php else : ?>

<div class="page page-favorits">
    <?php 
        get_template_part( 'partials/page', 'head', 
            array(
                "title" => get_the_title(),
            )
        ); 
    ?>
    <div class="page-body">
        loading
    </div>
</div>

<?php endif; ?>