<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-SINGLE.PHP
// -----------------------------------------------------------------------------
// Single post output for Integrity.
// =============================================================================

$fullwidth = get_post_meta( get_the_ID(), '_x_post_layout', true );
$pfx_date = get_the_date( 'l, F j, Y', $post_id );

?>

<?php get_header(); ?>
  
  <div class="x-container-fluid max width offset cf">
    <div class="<?php x_main_content_class(); ?>" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
        <?php x_get_view( 'integrity', 'content', get_post_format() ); ?>

 
      <?php endwhile; ?>

<?php if ( !wp_is_mobile() ) { ?>  
<div class="post-wrap">
    <?php
query_posts('meta_key=post_views_count&showposts=3&orderby=meta_value_num&order=DESC');
?>

  <div class="popular-on-bable"><h4>POPULAR ON BABLE</h4>
    
</div>
   

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
<?php } ?>

</div>
   



    <?php if ( $fullwidth != 'on' ) : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>

  </div>


  

<?php get_footer(); ?>