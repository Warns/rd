<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */
?>
<menu>
    <div class="site-branding">

        <?php if ( has_custom_logo() ) : ?>
        <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>
        <?php $blog_info = get_bloginfo( 'name' ); ?>
        <?php if ( ! empty( $blog_info ) ) : ?>
        <?php if ( is_front_page() && is_home() ) : ?>
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <?php else : ?>
        <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                rel="home"><?php bloginfo( 'name' ); ?></a></p>
        <?php endif; ?>
        <?php endif; ?>

        <?php
		$description = get_bloginfo( 'description', 'display' );
		if ( $description || is_customize_preview() ) :
			?>
        <p class="site-description">
            <?php echo $description; ?>
        </p>
        <?php endif; ?>
        <?php if ( has_nav_menu( 'menu-1' ) ) : ?>
        <nav id="site-navigation" class="main-navigation"
            aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
            <?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_class'     => 'main-menu',
						'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					)
				);
				?>
        </nav><!-- #site-navigation -->
        <?php endif; ?>
        <?php if ( has_nav_menu( 'social' ) ) : ?>
        <nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'twentynineteen' ); ?>">
            <?php
				wp_nav_menu(
					array(
						'theme_location' => 'social',
						'menu_class'     => 'social-links-menu',
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>' . twentynineteen_get_icon_svg( 'link' ),
						'depth'          => 1,
					)
				);
				?>
        </nav><!-- .social-navigation -->
        <?php endif; ?>
    </div><!-- .site-branding -->

    <div class="menu-container">
        <!-- Slide-in Menu -->
        <div id="slide-in-menu">
            <?php
    wp_nav_menu(array(
        'theme_location' => 'menu-1',
        'container' => false,
    ));
    ?>
        </div>

        <!-- Hamburger Button -->
        <button id="hamburger-icon" class="hamburger-button"></button>

        <!-- Modal structure -->
        <div id="searchModal" class="modal">
            <div class="modal-content">
                <span id="closeSearchModal" class="close">&times;</span>
                <div class="dynamic_search">
                    <?php dynamic_sidebar( 'top_header' ); ?>
                </div>
            </div>
        </div>

        <!-- Search Button to trigger the modal -->
        <button id="openSearchModal" class="wp-block-search__button"></button>
    </div>

    <div class="dynamic_search">
        <?php dynamic_sidebar( 'top_header' ); ?>
    </div>
</menu>