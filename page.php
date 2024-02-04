<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php if($post->post_name == "kavramlar") : ?>

    <?php get_template_part( 'pages/page', 'terms' ); ?>

<?php elseif($post->post_name == "listem") : ?>

    <?php get_template_part( 'pages/page', 'favorites' ); ?>

<?php else: ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="page-content" itemprop="mainContentOfPage">
    <?php 
        get_template_part( 'partials/page', 'head', 
            array(
                "title" => get_the_title(),
            )
        ); 
    ?>
    <figure>
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
    </figure>
    <div class="page-body">
        <?php the_content(); ?>
    </div>
    
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>

</article>

<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>

<?php endif; ?>
<?php endwhile; endif; ?>

<?php get_footer(); ?>