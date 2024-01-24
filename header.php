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

            <header id="header" role="banner" class="">
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
                <a href="#">
                    <small>Listem</small>
                    <span>3</span>
                    <svg class="icon">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#bookmark" width="32" height="32" />
                    </svg>
                </a>
            </div>
            <button class="menu-trigger">
                <svg class="burger" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.25 6.75H18.75V8.25H5.25V6.75Z" fill="#2D2D2D"/>
                    <path d="M5.25 11.25H16.725V12.75H5.25V11.25Z" fill="#2D2D2D"/>
                    <path d="M5.25 15.75H18.75V17.25H5.25V15.75Z" fill="#2D2D2D"/>
                </svg>
                <svg class="close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.6967 7.7574L7.75736 6.69674L17.3033 16.2427L16.2426 17.3033L6.6967 7.7574Z" fill="#2D2D2D"/>
                    <path d="M16.2427 6.69669L17.3033 7.75735L7.7574 17.3033L6.69674 16.2426L16.2427 6.69669Z" fill="#2D2D2D"/>
                </svg>
            </button>
            <div id="tabs">
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