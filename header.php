<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
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

                    $logo = '
                    <svg width="180" height="18" viewBox="0 0 180 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 18V17.4327L2.00951 16.9599V1.02823L0 0.567303V0H7.24607C8.46754 0 9.54717 0.19698 10.4849 0.59094C11.4306 0.97702 12.1674 1.5522 12.6954 2.31648C13.2313 3.07288 13.4992 4.00657 13.4992 5.11753C13.4992 6.27577 13.1604 7.22915 12.4826 7.97768C11.8128 8.7262 10.8671 9.25017 9.64567 9.54957L14.5749 16.9599L17.1636 17.4327V18H11.9152L6.73779 9.85686H4.66917V16.9599L7.32882 17.4327V18H0ZM4.66917 8.89954H6.04037C7.00178 8.89954 7.7583 8.78529 8.30994 8.5568C8.86945 8.3283 9.32257 8.02101 9.66931 7.63493C10.0161 7.24885 10.2603 6.81944 10.4022 6.34668C10.5519 5.86605 10.6268 5.37755 10.6268 4.88116C10.6268 3.94353 10.4377 3.17137 10.0594 2.56468C9.68113 1.95798 9.15708 1.52068 8.48725 1.25279C8.21931 1.14248 7.92379 1.06763 7.6007 1.02823C7.2776 0.98096 6.87175 0.957322 6.38316 0.957322H4.66917V8.89954Z" fill="#444444"/>
                        <path d="M109.341 18V17.4091L111.351 16.9599V1.01642L109.341 0.567303V0H115.24C116.501 0 117.584 0.0551547 118.49 0.165464C119.405 0.275772 120.201 0.456993 120.878 0.709127C121.564 0.953382 122.182 1.28431 122.734 1.7019C123.806 2.4977 124.633 3.53382 125.216 4.81024C125.8 6.07879 126.091 7.48523 126.091 9.02955C126.091 10.6211 125.78 12.0867 125.157 13.4261C124.535 14.7577 123.676 15.8214 122.58 16.6172C121.887 17.1136 121.13 17.4682 120.311 17.6809C119.491 17.8936 118.49 18 117.308 18H109.341ZM116.434 17.0663C117.553 17.0663 118.471 16.9245 119.188 16.6408C119.905 16.3493 120.539 15.8726 121.091 15.2108C121.698 14.4544 122.159 13.5286 122.474 12.4334C122.797 11.3303 122.959 10.1129 122.959 8.78135C122.959 7.44977 122.797 6.27183 122.474 5.24754C122.151 4.22324 121.674 3.36441 121.044 2.67105C120.468 2.06435 119.783 1.63099 118.987 1.37098C118.191 1.10309 117.159 0.96914 115.89 0.96914H114.01V15.6599C114.01 16.1878 114.188 16.5542 114.542 16.759C114.897 16.9639 115.527 17.0663 116.434 17.0663Z" fill="#444444"/>
                        <path d="M101.039 16.3244L92.0746 4.32831V15.1477L93.6927 15.5154V16.0302H89.4911V15.5154L91.1276 15.1477V2.8943L89.5003 2.54498V2.03021H93.7019L100.947 11.6271V2.8943L99.3285 2.54498V2.03021H103.53V2.54498L101.894 2.8943V16.3244H101.039Z" fill="#444444"/>
                        <path d="M74.4876 16.0302V15.5154C75.1005 15.4113 75.5602 15.2887 75.8667 15.1477C76.1793 15.0068 76.4152 14.8076 76.5746 14.5502C76.7401 14.2929 76.9056 13.9374 77.0711 13.4839L80.5647 4.07092L79.9395 2.66449L82.1185 1.66252L87.0924 14.394C87.2027 14.6759 87.3222 14.8904 87.4509 15.0374C87.5796 15.1845 87.7605 15.2918 87.9934 15.3592C88.2324 15.4266 88.5665 15.4787 88.9955 15.5154V16.0302H82.4863V15.5154C83.0563 15.4848 83.4884 15.4419 83.7826 15.3867C84.0768 15.3255 84.2484 15.2029 84.2974 15.019C84.3465 14.8291 84.2944 14.5227 84.1411 14.0998L81.0336 5.61524H80.9785L78.0364 13.6402C77.8954 14.0324 77.8525 14.3511 77.9077 14.5962C77.9629 14.8352 78.1437 15.0252 78.4501 15.1661C78.7566 15.301 79.2132 15.4174 79.82 15.5154V16.0302H74.4876ZM78.4685 11.3513V10.4872H83.7826V11.3513H78.4685Z" fill="#444444"/>
                        <path d="M62.7212 16.0302V15.4419L70.7474 2.86672H65.3046C64.9124 3.55921 64.5906 4.17204 64.3393 4.70519C64.088 5.23835 63.901 5.69797 63.7785 6.08405L63.1809 6.05647L64.0267 2.03021H73.9377V2.59095L65.8839 15.1845H71.6116C71.9058 14.7555 72.1633 14.3511 72.3839 13.9711C72.6046 13.5912 72.8099 13.199 72.9999 12.7945C73.196 12.39 73.3983 11.9335 73.6067 11.4248L74.1859 11.4708L73.1654 16.0302H62.7212Z" fill="#444444"/>
                        <path d="M47.9475 16.0302V15.5154C48.5604 15.4113 49.0201 15.2887 49.3266 15.1477C49.6392 15.0068 49.8752 14.8076 50.0345 14.5502C50.2 14.2929 50.3655 13.9374 50.531 13.4839L54.0246 4.07092L53.3995 2.66449L55.5784 1.66252L60.5523 14.394C60.6626 14.6759 60.7821 14.8904 60.9109 15.0374C61.0396 15.1845 61.2204 15.2918 61.4533 15.3592C61.6923 15.4266 62.0264 15.4787 62.4554 15.5154V16.0302H55.9462V15.5154C56.5162 15.4848 56.9483 15.4419 57.2425 15.3867C57.5367 15.3255 57.7083 15.2029 57.7574 15.019C57.8064 14.8291 57.7543 14.5227 57.6011 14.0998L54.4935 5.61524H54.4384L51.4963 13.6402C51.3554 14.0324 51.3125 14.3511 51.3676 14.5962C51.4228 14.8352 51.6036 15.0252 51.9101 15.1661C52.2165 15.301 52.6732 15.4174 53.2799 15.5154V16.0302H47.9475ZM51.9284 11.3513V10.4872H57.2425V11.3513H51.9284Z" fill="#444444"/>
                        <path d="M37.9015 16.2233L32.8908 4.31911H32.8173V15.1477L34.4354 15.5154V16.0302H30.2338V15.5154L31.8703 15.1477V2.8943L30.243 2.54498V2.03021H34.7848L38.9956 12.2154H39.0875L43.3718 2.03021H47.5458V2.54498L45.9737 2.8943V15.1385L47.5458 15.5154V16.0302H41.9376V15.5154L43.5373 15.1385V4.56731H43.4638L38.5634 16.2233H37.9015Z" fill="#444444"/>
                        <path d="M15.2303 16.0302V15.5154C15.8432 15.4113 16.3029 15.2887 16.6094 15.1477C16.922 15.0068 17.1579 14.8076 17.3173 14.5502C17.4828 14.2929 17.6483 13.9374 17.8138 13.4839L21.3074 4.07092L20.6823 2.66449L22.8612 1.66252L27.8351 14.394C27.9454 14.6759 28.0649 14.8904 28.1936 15.0374C28.3224 15.1845 28.5032 15.2918 28.7361 15.3592C28.9751 15.4266 29.3092 15.4787 29.7382 15.5154V16.0302H23.229V15.5154C23.799 15.4848 24.2311 15.4419 24.5253 15.3867C24.8195 15.3255 24.9911 15.2029 25.0401 15.019C25.0892 14.8291 25.0371 14.5227 24.8838 14.0998L21.7763 5.61524H21.7212L18.7791 13.6402C18.6382 14.0324 18.5952 14.3511 18.6504 14.5962C18.7056 14.8352 18.8864 15.0252 19.1928 15.1661C19.4993 15.301 19.9559 15.4174 20.5627 15.5154V16.0302H15.2303ZM19.2112 11.3513V10.4872H24.5253V11.3513H19.2112Z" fill="#444444"/>
                        <path d="M166.411 16.0302V15.5154L167.974 15.1294V2.91268L166.411 2.54498V2.03021H172.36C173.31 2.03021 174.15 2.18342 174.879 2.48983C175.615 2.79011 176.188 3.23748 176.598 3.83192C177.015 4.42023 177.223 5.14643 177.223 6.01051C177.223 6.90524 176.972 7.64676 176.47 8.23507C175.973 8.81725 175.274 9.23398 174.373 9.48523L178.097 15.1477L180 15.5154V16.0302H175.624L171.716 9.77939H170.392V15.1294L172.47 15.5154V16.0302H166.411ZM170.392 8.95208H171.192C171.909 8.95208 172.479 8.86322 172.902 8.6855C173.325 8.50778 173.668 8.26877 173.932 7.96849C174.202 7.66821 174.392 7.33422 174.502 6.96652C174.619 6.5927 174.677 6.21275 174.677 5.82667C174.677 5.12192 174.53 4.53973 174.235 4.08011C173.941 3.62049 173.54 3.28957 173.031 3.08733C172.823 3.00154 172.593 2.94332 172.341 2.91268C172.096 2.87591 171.787 2.85753 171.413 2.85753H170.392V8.95208Z" fill="#444444"/>
                        <path d="M159.192 16.0302V15.5154L160.801 15.1385V2.8943L159.192 2.54498V2.03021H164.809V2.54498L163.228 2.8943V15.1385L164.809 15.5154V16.0302H159.192Z" fill="#444444"/>
                        <path d="M147.951 16.2233L142.94 4.31911H142.867V15.1477L144.485 15.5154V16.0302H140.283V15.5154L141.92 15.1477V2.8943L140.292 2.54498V2.03021H144.834L149.045 12.2154H149.137L153.421 2.03021H157.595V2.54498L156.023 2.8943V15.1385L157.595 15.5154V16.0302H151.987V15.5154L153.587 15.1385V4.56731H153.513L148.613 16.2233H147.951Z" fill="#444444"/>
                        <path d="M127.445 16.0302V15.5154L129.008 15.1477V2.8943L127.445 2.54498V2.03021H138L138.331 6.0289H137.752C137.598 5.52638 137.411 5.00241 137.191 4.457C136.976 3.90546 136.716 3.37843 136.409 2.87591H131.426V15.1753H136.308C136.682 14.6054 136.985 14.0385 137.218 13.4747C137.457 12.9109 137.681 12.3441 137.89 11.7741H138.634L137.917 16.0302H127.445ZM135.003 11.1858C134.935 10.8304 134.843 10.4749 134.727 10.1195C134.61 9.75794 134.46 9.4025 134.276 9.05319H131.16V8.21668H134.276C134.466 7.86125 134.617 7.50581 134.727 7.15037C134.837 6.7888 134.929 6.43643 135.003 6.09324H135.573V11.1858H135.003Z" fill="#444444"/>
                    </svg>';


                    echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url">'. $logo .'<span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
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
                    <input class="aya-field" type="search" list="chapters" name="Sureler" id="chapter" placeholder="Sure">
                </form>
                <div class="sura-list">
                    <ul></ul>
                </div>
            </div>
            <div id="favorites">
                <a href="<?php echo home_url('/listem') ?>">
                    <small>Listem</small>
                    <span></span>
                    <svg class="icon large" viewBox="0 0 32 32">
                        <use href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#bookmark" />
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

                    // $cats = get_the_category();
                    // if($cats[0]->category_parent){
                    //     echo category_href($cats[0]->category_parent);
                    //     echo '&nbsp;&nbsp;/&nbsp;&nbsp;';
                    // }
                    // echo category_href($cats[0]->term_id);

                    the_category ('&nbsp;&nbsp;/&nbsp;&nbsp;', 'multiple');

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