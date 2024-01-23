
<div id="post-<?php the_ID(); ?>" class="post post-video" <?php //post_class(); ?>>
    <?php
         $current = get_the_ID();
    ?>
    <div class="left">
        <div class="embed-video">
            <iframe id="youtube-video" src="<?php echo get_field('youtube_url').'?enablejsapi=1'; ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
    <div class="right">
        <div class="post-head">
            <h1><?php the_title(); ?></h1>
            <div class="post-meta">
                <ul>
                    <li><?php the_time('j F Y'); ?></li>
                </ul>
            </div>
        </div>
        <div class="post-body">
            <?php the_content(); ?>
        </div>
        <div class="post-foot">
            <?php the_tags('Kavramlar: '); ?>
        </div>
    </div>
</div>

    <section class="video">
        <?php get_template_part( 'partials/section', 'head', array("title"=>"İlgili Videolar") ); ?>
        <div class="section-body">
        <?php

            $args = array(
                'posts_per_page' => 5,
                'category_name' => 'videolar',
                'post__not_in' => array($current)
            );

            $query = new WP_Query( $args );
            while ( $query->have_posts() ):
                $query->the_post();
                
                echo '<div class="box">';
                get_template_part( 'lists/item', 'video' );
                echo '</div>';

            endwhile;
        ?>
        </div>
    </section>

    <!-- Video Timestamp Navigation -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var timestamps = document.querySelectorAll('.post-body a.timestamp');

        timestamps.forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var time = convertToSeconds(e.target.getAttribute('data-time'));
                var iframe = document.getElementById('youtube-video');
                var videoSrc = iframe.src.split('?')[0];

                // Seek to the specific time
                iframe.contentWindow.postMessage(JSON.stringify({
                    "event": "command",
                    "func": "seekTo",
                    "args": [time, true]
                }), videoSrc);

                // Start playing the video
                iframe.contentWindow.postMessage(JSON.stringify({
                    "event": "command",
                    "func": "playVideo"
                }), videoSrc);
            });
        });
    });

    function convertToSeconds(time) {
        var parts = time.split(':');
        return parseInt(parts[0]) * 60 + parseInt(parts[1]);
    }
</script>


