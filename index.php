<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
        <h3 id="heading" class="heading-content">Son Yazilar</h3>
        <main id="main" class="site-main">
            <?php if ( is_front_page() ) : ?>
            <style>
            @media (min-width: 768px) {

                .content-wrapper .content-area main .entry-header {
                    margin: 0;
                    font-size: 12px;
                    font-family: "Inter", sans-serif;
                }
            }

            @media (min-width: 768) {
                .content-wrapper .content-area main .entry-content p {
                    margin: 0;
                    padding-right: 40px;
                    font-family: "Inter", sans-serif !important;
                }
            }
            </style>
            <?php endif; ?>

            <?php
$args = array(
	'posts_per_page' => 5,
	'cat' => 1
);

$query = new WP_Query( $args );

if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post();
		get_template_part( 'template-parts/content/content-excerpt' );
	}
	echo '<a href="' . get_category_link(1) . '" class="all-articles-btn">Tüm Yazılar</a>';
} else {
	get_template_part( 'template-parts/content/content', 'none' );
}
?>

        </main><!-- .site-main -->
    </div><!-- .content-area -->

    <?php rewind_posts(); ?>

    <div class="right-content">
        <h3>Kitaplar</h3>
        <?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
				if( in_category('kitaplar') )
				get_template_part( 'template-parts/content/content-book' );
			}

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

		} else {

			// If no content, include the "No posts found" template.
			get_template_part( 'template-parts/content/content', 'none' );

		}
		?>
    </div>
</div>

<?php
get_footer();