<?php
/**
 * Template part for displaying page content in page.php
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
// Check if the page has the "ilkeler" category and output corresponding styles
if ( is_page( 'İlkelerimiz' ) ) {
    echo '<style>
    @media (max-width: 768px) {
        .entry:first-of-type {
            margin-top: 70px;
        }
    }
    </style>';
}
?>

    <?php if ( ! twentynineteen_can_show_post_thumbnail() ) : ?>
    <header class="entry-header">
        <?php get_template_part( 'template-parts/header/entry', 'header' ); ?>
    </header>
    <?php endif; ?>

    <div class="content-wrapper">
        <div class="entry-content">
            <?php
		the_content();

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'twentynineteen' ),
				'after'  => '</div>',
			)
		);
		?>
        </div><!-- .entry-content -->
    </div>

    <?php if ( get_edit_post_link() ) : ?>
    <footer class="entry-footer">
        <?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Post title. Only visible to screen readers. */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'twentynineteen' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">' . twentynineteen_get_icon_svg( 'edit', 16 ),
				'</span>'
			);
			?>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->