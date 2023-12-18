</main>
</div>

<footer id="footer" role="contentinfo">
    <div class="inside">
        <div class="links">
            <?php wp_nav_menu( array( 'menu' => 'primary' ) ); ?>
            <?php wp_nav_menu( array( 'menu' => 'footer' ) ); ?>
        </div>
    <div id="copyright">
        &copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?>
        <?php echo get_the_privacy_policy_link(); ?>
    </div>
    </div>
</footer>

</div>
<?php wp_footer(); ?>
</body>
</html>