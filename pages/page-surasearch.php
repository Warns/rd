<?php

    $id = $_GET['id'];
    $title = $_GET['c'];

    if(!$title){
        $title = "Arama sonucu";
    }else{
        $title .= ' suresi ile ilgili içerikler';
    }

?>

<div class="page page-sura-search">
    <?php 
        get_template_part( 'partials/page', 'head', 
            array(
                "title" => $title,
            )
        ); 
    ?>
    <div class="page-body">

    <?php
    
        $ids = base64_decode($id);

        $ids = explode(",", $ids);

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
    ?>

    </div>
</div>