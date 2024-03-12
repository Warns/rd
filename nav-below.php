<?php 
$args = array(
'prev_text' => sprintf( esc_html__( '%s', 'blankslate' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( '%s', 'blankslate' ), '<span class="meta-nav">&rarr;</span>' )
);
// the_posts_navigation( $args );

the_posts_pagination( $args );