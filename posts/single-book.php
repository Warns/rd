
<div id="post-<?php the_ID(); ?>" class="post post-book" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
    ?>
    <div class="left">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="right">
        <div class="post-head">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <ul>
                    <li>
                        <a class="button light dir" href="<?php echo get_field('pdf_file') ?>">
                            <svg class="icon" viewBox="0 0 32 32">
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#read" />
                            </svg>
                            Online oku
                        </a>
                    </li>
                    <li>
                        <a class="button light dir" href="<?php echo get_field('pdf_file') ?>" download>
                            <svg class="icon" viewBox="0 0 32 32">
                                <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#download" />
                            </svg>
                            PDF indir
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="post-body">
            <?php the_content(); ?>
        </div>
        
        <?php get_template_part( 'partials/page', 'foot' ); ?>

    </div>
</div>

<section class="book">
    <?php get_template_part( 'partials/section', 'head', array("title"=>"Diğer Kitaplar") ); ?>
    <div class="section-body">
    <?php

        $args = array(
            'posts_per_page' => 4,
            'category_name' => 'kitaplar',
            'post__not_in' => array($current)
        );

        $query = new WP_Query( $args );
        while ( $query->have_posts() ):
            $query->the_post();
            
            echo '<div class="box">';
            get_template_part( 'lists/item', 'book' );
            echo '</div>';

        endwhile;
    ?>
    </div>
</section>


