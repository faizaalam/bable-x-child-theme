<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-HEADER.PHP
// -----------------------------------------------------------------------------
// Header output for Integrity.
// =============================================================================

?>

<?php x_get_view( 'global', '_header' ); ?>

  <?php x_get_view( 'global', '_slider-revolution-above' ); ?>

  <?php if ( !wp_is_mobile() ) { ?>

  <header class="<?php x_masthead_class(); ?>" role="banner">
    <?php x_get_view( 'global', '_topbar' ); ?>
    <?php x_get_view( 'global', '_navbar' ); ?>
    <?php x_get_view( 'integrity', '_breadcrumbs' ); ?>
  </header>

  <?php } 
?>

  <?php if ( wp_is_mobile() ) { ?>
  	<div class="wrap">
  		<a href="/wordpress/" class="mobile-logo"><img src="http://127.0.0.1/wordpress/wp-content/uploads/2015/03/Bable-logo-new-small.jpg" height="50px" width="100px"/></a>
  <a href="#" id="mobile-menu-button">Menu</a>
  <div id="hidden-div">
    <ul id="mobile-menu">
      <li>Home</li>
      <li>Work</li>
      <li>About</li>
      <li>Capabilities</li>
      <li>Culture</li>
      <li>The Bable Blog</li>
      <li>Contact</li>
    </ul>
  </div>
</div>

<script>

jQuery(function($){
$('#mobile-menu-button').click(function() {
  $("#hidden-div").slideToggle('slow');
    return false;
});

});
</script>

    <?php } 
?>

  <?php x_get_view( 'global', '_slider-revolution-below' ); ?>
  <?php x_get_view( 'integrity', '_landmark-header' ); ?>