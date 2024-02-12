<?php

$id = $_GET['id'];

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
        <svg width="64" height="64" version="1.1" id="L4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
            <circle fill="#222" stroke="none" cx="6" cy="50" r="6">
                <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite"
                begin="0.1"/>    
            </circle>
            <circle fill="#222" stroke="none" cx="26" cy="50" r="6">
                <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite" 
                begin="0.2"/>       
            </circle>
            <circle fill="#222" stroke="none" cx="46" cy="50" r="6">
                <animate
                attributeName="opacity"
                dur="1s"
                values="0;1;0"
                repeatCount="indefinite" 
                begin="0.3"/>     
            </circle>
        </svg>
    </div>
</div>

<?php endif; ?>