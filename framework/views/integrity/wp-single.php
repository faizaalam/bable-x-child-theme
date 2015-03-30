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
 

<!--  Post Page - Desktop - Below Post Body -->
<?php if ( !wp_is_mobile() ) { ?>  
<div class="post-wrap">

<!--  Quering posts to order by post views count in descending order and display only 3 posts -->
    <?php
query_posts('meta_key=post_views_count&showposts=3&orderby=meta_value_num&order=DESC');
?>
 <!--  END of Quering posts to order by post views count in descending order and display only 3 posts -->

  <div class="popular-on-bable"><h4>POPULAR ON BABLE</h4>
    
</div>
   
<!-- Display each Post Content Box  -->
<div class="popularperposts">
<?php while(have_posts()) : the_post(); ?>
  <a href="<?php echo get_permalink( $ID ); ?>">
  <div class="module lr" style="background: linear-gradient(to right, rgba(0,48,113,1), rgba(0,112,209,1));">
  <p><b><span style="font-size: 1.2em; line-height: 0.7;"><?php the_title(); ?></b></span><br>
  <?php echo $pfx_date; ?></p>
  </a>
</div>


<?php endwhile; ?>
<?php wp_reset_query(); ?>
</div>
</div>

<!-- END of Display each Post Content Box  -->
<?php } ?>

<!--  END of Post Page - Desktop - Below Post Body -->

</div>

<!-- Post Page - Mobile - Sharing Buttons - Below Post Body  -->
     <?php if ( wp_is_mobile() ) { ?>
       <span class='st_facebook_large' ></span>
<span class='st_twitter_large' ></span>
<span class='st_googleplus_large' ></span>
<span class='st_linkedin_large' ></span>
<?php } ?>
   
<!-- END of Post Page - Mobile - Sharing Buttons - Below Post Body  -->


    <?php if ( $fullwidth != 'on' ) : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>

  </div>


  

<?php get_footer(); ?>