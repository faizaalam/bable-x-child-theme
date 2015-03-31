<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Integrity.
// =============================================================================

?>

  

  <?php if ( x_get_option( 'x_footer_bottom_display' ) == 1 ) : ?>

  <?php if ( !wp_is_mobile() ) { ?>

    <footer class="x-colophon bottom" role="contentinfo">
      <div class="x-container-fluid max width">

        <?php if ( x_get_option( 'x_footer_menu_display' ) == 1 ) : ?>
          <?php x_get_view( 'global', '_nav', 'footer' ); ?>
        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_social_display' ) == 1 ) : ?>
          <?php x_social_global(); ?>
        <?php endif; ?>

        <?php if ( x_get_option( 'x_footer_content_display' ) == 1 ) : ?>
          <div class="x-colophon-content">
            <?php echo x_get_option( 'x_footer_content' ); ?>
          </div>
          <?php x_get_view( 'global', '_header', 'widget-areas' ); ?>
  <?php x_get_view( 'global', '_footer', 'scroll-top' ); ?>
  <?php x_get_view( 'global', '_footer', 'widget-areas' ); ?>
        <?php endif; ?>

      </div>
    </footer>

    <?php } 
   ?>

   <?php if ( wp_is_mobile() ) { ?>
  <div class="footer-mobile" style="text-align: center;">
    <a href="/wordpress/"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2015/02/WebAble_logo21.png"></a>
    <ul>
        <li><a href="#">Work</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Capabilities</a></li>
        <li><a href="#">Culture</a></li>
        <li><a href="#">Bable Blog</a></li>
        <li><a href="#">Contact</a></li>

    </ul>

  </div>
    <?php } 
   ?>




  <?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>