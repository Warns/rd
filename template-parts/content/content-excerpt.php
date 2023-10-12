<?php
/**
 * #Kitaplar
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
// Check for specific category and output corresponding styles
if ( in_category( 'kitaplar' ) ) {
    echo '<style>
    @media (min-width: 768px) {
        .site-main {
            display: flex;
            flex-direction: row;
            margin-top: 95px;
            gap: 50px;
            border-right: none;
            flex-wrap: wrap;
        }
    }
    </style>';
    echo '<style>
    @media (min-width: 768px) {
        .content-wrapper .content-area {
            border-right: none;
        }
    }
    </style>';
    echo '<style>
    @media (min-width: 768px) {
        .entry {
            margin-top: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex-basis: calc(50% - 25px); 
            box-sizing: border-box; 
        }
    }
    </style>';
    echo '<style>
    @media (min-width: 768px) {
        .content-wrapper .content-area main .page-header {
            margin: -42px 0 0 0;
            flex-basis: 100%;       
         }
    }
    </style>';
}
    ?>
    <div class="entry-header">
        <?php
		if ( is_sticky() && is_home() && ! is_paged() ) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'twentynineteen' ) );
		}
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
    </div><!-- .entry-header -->

    <?php twentynineteen_post_thumbnail(); ?>

    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
        <?php twentynineteen_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->