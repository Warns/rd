<?php
/**
 * #Yazilar
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>


<div class="content-wrapper">
	
    <div id="primary" class="content-area">
        <?php
        if ( in_category( 'yazilar' ) ) {
        echo '<style>
        @media (min-width: 768px) {
			.content-wrapper .content-area {
				border-right: none;
			}
        }
        </style>';
		echo '<style>
		@media (min-width: 768px) {
			.content-wrapper .content-area main .entry-header {
				margin: 0;
				font-size: 12px;
				font-family: "Inter", sans-serif;
			}
		}
		</style>';
	}
		?>
        <main id="main" class="site-main">
		<hr class="separator" aria-hidden="true">


            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
					the_archive_title( '<h3 class="page-title">', '</h3>' );
				?>

            </header><!-- .page-header -->

            <?php
			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/content/content', 'excerpt' );

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
        </main><!-- #main -->
		
    </div><!-- #primary -->
</div>

<?php
get_footer();