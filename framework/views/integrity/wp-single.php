
<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-SINGLE.PHP
// -----------------------------------------------------------------------------
// Single post output for Integrity.
// =============================================================================

// Checking for post-layout
$fullwidth = get_post_meta( get_the_ID(), '_x_post_layout', true );
// Setting the date in format Month Date, Year
$pfx_date = get_the_date( 'F j, Y', $post_id );

?>

<?php get_header(); ?>
  
  <div class="x-container-fluid max width offset cf">
    <div class="<?php x_main_content_class(); ?>" role="main">



      <?php while ( have_posts() ) : the_post(); ?>

        <?php x_get_view( 'integrity', 'content', get_post_format() ); ?>

 
      <?php endwhile; ?>
 





<!-- END of Display each Post Content Box  -->

<!--  END of Post Page - Desktop - Below Post Body -->

</div>

<!-- Post Page - Mobile - Sharing Buttons - Below Post Body  -->
        
<!-- END of Post Page - Mobile - Sharing Buttons - Below Post Body  -->


    <?php if ( $fullwidth != 'on' ) : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>

  </div>


  

<?php get_footer(); ?>
