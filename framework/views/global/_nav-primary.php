<?php

// =============================================================================
// VIEWS/GLOBAL/_NAV-PRIMARY.PHP
// -----------------------------------------------------------------------------
// Outputs the primary nav.
// =============================================================================

?>

  

<a href="#" class="x-btn-navbar collapsed" data-toggle="collapse" data-target=".x-nav-collapse">
  <i class="x-icon-bars"></i><span class="visually-hidden"><?php _e( 'Navigation', '__x__' ); ?></span>
</a>

<nav class="x-nav-collapse collapse" role="navigation">


<div class="logo left"><a href="http://webable.digital/" target="_blank"><img src="/bable/wp-content/uploads/2015/05/white-logo-new-blog.png"></a></div>

  <?php

  if ( x_is_one_page_navigation() ) :
    wp_nav_menu( array(
      'menu'       => x_get_one_page_navigation_menu(),
      'container'  => false,
      'menu_class' => 'x-nav x-nav-scrollspy sf-menu'
    ) );
  elseif ( has_nav_menu( 'primary' ) ) :
    wp_nav_menu( array(
      'theme_location' => 'primary',
      'container'      => false,
      'menu_class'     => 'x-nav sf-menu',
    ) );
  else :
    echo '<ul class="x-nav"><li><a href="' . home_url( '/' ) . 'wp-admin/nav-menus.php">Assign a Menu</a></li></ul>';
  endif;

  ?>
 



  <a href="#">

<!-- Menu Icons on Right of NavBar -->
 <div class="menu right menu-full small-1 column">
<a class="cd-primary-nav-trigger" href="#">
           <div class="menu cd-menu-icon"></div>
         </a>
         </div>
       </a>
            

       

  


</nav> <!-- end .x-nav-collapse.collapse -->

