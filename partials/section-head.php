<div class="section-head">
    <?php if( $args['title'] ) : ?>
    <!-- <h2 id="<?php echo $args['slug']; ?>"> -->
    <h2 id="<?php echo isset($args['slug']) ? $args['slug'] : ''; ?>">
        <?php echo $args['title']; ?>
    </h2>
    <?php endif; ?>
</div>
