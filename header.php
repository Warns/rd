<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width" />
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <?php wp_body_open(); ?>
        <div id="wrapper" class="hfeed">

            <header id="header" role="banner">
            <div id="branding">
                <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
                    <?php
                    if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
                    if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
                    ?>
                </div>
                <div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
            </div>
            <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
            </nav>
            <div id="search">
                <?php get_search_form(); ?>
                <form class="aya-form">
                    <input type="search" list="chapters" name="Sureler" id="chapter" placeholder="Sure">
                    <input type="search" list="verses" name="Ayet" id="verse" placeholder="Ayet">
                    <datalist id="chapters">
                        <option value="1. Fatiha">
                        <option value="2. Baqara">
                        <option value="3. Al-imran">
                    </datalist>
                    <datalist id="verses">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                    </datalist>
                </form>
            </div>
            <div id="favorites">
                <a href="#"><small>Listem</small></a>
                <span>3</span>
                <svg class="icon">
                    <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#bookmark" width="32" height="32" />
                </svg>
            </div>
            </header>

        <div id="container">
        <main id="content" role="main">

        <?php

            function get_breadcrumb() {
                echo '<a href="'.home_url().'" rel="”nofollow”">Home</a>';
                if (is_category() || is_single()){
                    echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
                    the_category (' • ');
                        if (is_single()) {
                            echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
                            the_title();
                        }
            } elseif (is_page()) {
                    echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
                    echo the_title();
                } elseif (is_search()) {
                    echo '&nbsp;&nbsp;/&nbsp;&nbsp;'; //Search Results for…
                    echo '"<em>';
                    echo the_search_query();
                    echo '</em>"';
                }
            }

            if(!is_home()){
                echo '<div class="breadcrumb">';
                get_breadcrumb();
                echo '</div>';
            }

        ?>