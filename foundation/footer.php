<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package suburbangrown
 */

?>
</div><!--content-container-->
    <footer>
      <div class="footer-content">
        <div class="grid-x grid-padding-x">
          <div class="large-4 cell site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'suburbangrown' ) ); ?>"><?php
            /* translators: %s: CMS name, i.e. WordPress. */
            printf( esc_html__( 'Proudly powered by %s', 'suburbangrown' ), 'WordPress' );
            ?></a>
            <span class="sep"> | </span>
            <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( 'Theme: %1$s by %2$s.', 'suburbangrown' ), 'suburbangrown', '<a href="http://underscores.me/">Underscores.me</a>' );
            ?>
          </div><!--.site-info-->
          <div class="large-4 cell">
            <h4>Another footer heading</h4>
            <p>Veniam non aliqua nostrud consectetur esse sunt nisi.</p>
          </div>
          <div class="large-4 cell">
            <h4>Third footer heading</h4>
            <p>Dolore tempor voluptate consectetur cupidatat quis exercitation qui tempor officia adipisicing pariatur nisi..</p>
          </div>
        </div>
        <div class="grid-x grid-padding-x">
          <div class="large-12 cell">
            <p class="copyright">Ut cillum nisi nostrud occaecat Lorem labore.</p>
          </div>

        </div>
      </div>
    </footer>
  </div>
  <script src="js/vendor/jquery.js"></script>
  <script src="js/vendor/what-input.js"></script>
  <script src="js/vendor/foundation.js"></script>
  <script src="js/app.js"></script>
  <?php wp_footer(); ?>
</body>