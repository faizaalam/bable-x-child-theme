<?php

// =============================================================================
// VIEWS/GLOBAL/_TOPBAR.PHP
// -----------------------------------------------------------------------------
// Includes topbar output.
// =============================================================================

?>

<?php if ( x_get_option( 'x_topbar_display', 0 ) == 1 ) : ?>

  <div class="x-topbar">
    <div class="x-topbar-inner x-container-fluid max width">
      <?php if ( x_get_option( 'x_topbar_content' ) != '' ) : ?>
      <p class="p-info"><?php echo x_get_option( 'x_topbar_content' ); ?></p>
      
      <?php endif; ?>

      <?php x_social_global(); ?>
    



</div>
  </div>

    <?php if(is_front_page()){ ?>
<div id="topp">
<p id="top-1" >THE BABLE BLOG</p>
<p  id="top-2">Business need to fulfill brand promises by delighting</p> 
</div> 
<?php } ?>


<?php endif; ?>

   


