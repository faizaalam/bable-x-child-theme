<?php
// =============================================================================
// VIEWS/INTEGRITY/CONTENT.PHP
// -----------------------------------------------------------------------------
// Standard post output for Integrity.
// =============================================================================

// 1s- Getting Category

$category = get_the_category();
$firstCategory = $category[0]->cat_name;

// 1e- Getting Category

// 2s- Getting Dates

$pfx_date = get_the_date( 'F j, Y', $post_id );
$mfx_date = get_the_date( 'F j, Y', $post_id );

// 2e- Getting Dates

?>

<!-- 3s- Mobile | Post Page | Title, Subtitle, Post Count, Post Date and Post Author -->

   <?php if ( wp_is_mobile() && is_single() ) : ?>

   <h5 class="post-heading-mobile">
   <span class="post-title-mobile"><?php echo get_the_title( $ID ); ?></span> <span id="post-subheading-mobile"><?php echo get_secondary_title($ID); ?></span><br>
<div class="post count mobile"><span class="count-views mobile"><?php echo fetchPostViews( get_the_ID() ); ?></span><span class="count-views-text mobile"> views</div>
	<span class="post-author-mobile">by <?php the_author(); ?></span><br>
    <span class="post-date-mobile"> <?php echo $pfx_date; ?></span>
   </h5>

 <?php
  endif;
?>

<!-- 3e- Mobile | Post Page | Title, Subtitle, Post Count, Post Date and Post Author -->

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<!-- 4s- Desktop | Home Page/Author Page | Featured Image -->

<?php if (!wp_is_mobile() && (is_front_page() || is_author() || is_search() || is_category() )) : ?>

 <div class="entry-featured">
    <a href="<?php echo get_permalink(); ?> " target="_blank"><?php the_post_thumbnail('Featured-Image-Desktop'); ?></a>
  </div>
<?php 
endif;
?>  

<!-- 4e- Desktop | Home Page/Author Page | Featured Image -->

<!-- 5s- Desktop | Post Page | Featured Image -->

<?php if (!wp_is_mobile() && is_single() ):  ?> 
<div class="entry-featured post" style="background-image: linear-gradient(to right, rgba(13,48,107,0.9), rgba(13,48,107,0.9)), url('<?php echo wp_get_thumbnail_url($id,0) ?>')">
<h2 class="single-article">

<br>

<span id="title-single"><b><?php echo get_the_title( $ID ); ?></b></span><br> <span id="title-subheading"><?php echo get_the_subtitle( $ID ); ?>
</span>
<div class="post count"><span class="count-views"><?php echo fetchPostViews( get_the_ID() ); ?></span><span class="count-views-text"> views</div>
<div class="header-avatar" style="border-radius: 100%;">
<?php echo get_avatar( get_the_author_meta( 'ID' ), 25); ?>
<span id="post-info" > Written by  <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" id="author"><?php the_author(); ?></a> on <?php echo $pfx_date; ?></span>
</div>

<br>
</h2>
<br>
<div class="post-nav">
<span class="post-navigation left"><?php next_post('%  ', '&laquo;', 'no'); ?></span> <span class="post-navigation right"> <?php previous_post(' % ', '&raquo; ', 'no'); ?></span>
</div>
  </div>
  <?php endif; ?>

  <!-- 5e- Desktop | Post Page | Featured Image -->

<!-- 6s- Mobile | Home Page | Each Post -->

   <?php if ( wp_is_mobile() && ( is_front_page() || is_category() ) ) : ?>
   <a href="<?php echo get_permalink( $ID ); ?>" id="mobile-post-link">
   <div class="post-mobile-layout">
     <div class="post-left-column"><?php the_post_thumbnail('Featured-Image-Mobile'); ?>
     </div>
   <div class="post-right-column">
    <h3 class="post-content"> 
      <span class="post-mobile-title"> <?php the_titlesmall('', '', true, '40') ?></span><br>
	<span class="cat-date"><?php echo $mfx_date; ?><br>by <?php the_author(); ?></span>

     </h3>

   </div>
</div> 
</a>  
<?php endif; ?>

<!-- 6e- Mobile | Home Page | Each Post -->

<!-- 7s- Desktop | Home/Post Page | Rest Content -->

<?php if ( (!wp_is_mobile() && (is_front_page() || is_category()) )  || is_single() || is_search()) { ?>
  <div class="entry-wrap">
    <?php x_get_view( 'integrity', '_content', 'post-header' ); ?>
    <?php x_get_view( 'global', '_content' ); ?>
   </div>
  <?php 
}
?>
  <?php x_get_view( 'integrity', '_content', 'post-footer' ); ?>
<?php
  if ( !function_exists('x_google_authorship_meta') ) {
    function x_google_authorship_meta(){
	echo '';
	}
}
?>

<!-- 7s- Desktop | Home/Post Page | Rest Content -->
</article>
