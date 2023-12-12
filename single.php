<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>

<?php

    $field = get_field_object('my_select');
     foreach( $field as $value => $label ):
        echo $label;
    endforeach;

 ?>


<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<footer class="footer">
<?php get_template_part( 'nav', 'below-single' ); ?>
</footer>
<?php get_footer(); ?>