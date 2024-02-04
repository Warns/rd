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
<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.5/dist/js.cookie.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/all.js"></script>
</body>
</html>