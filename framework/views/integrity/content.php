<?php
// =============================================================================
// VIEWS/INTEGRITY/CONTENT.PHP
// -----------------------------------------------------------------------------
// Standard post output for Integrity.
// =============================================================================
$category = get_the_category();
$firstCategory = $category[0]->cat_name;
$pfx_date = get_the_date( 'l, F j, Y', $post_id );
$mfx_date = get_the_date( 'F j, Y', $post_id );
?>

   <?php if ( wp_is_mobile() && is_single() ) : ?>

   <h5 class="post-heading-mobile">
   <span class="post-title-mobile"><b><?php echo get_the_title( $ID ); ?></b></span><br>
    <span class="post-date-mobile"> <?php echo $pfx_date; ?></span>
   </h5>
 <?php
  endif;
?>
<div class="overlay overlay-hugeinc">
  <div class="white_logo"><img src="http://s205830.gridserver.com/wordpress/wp-content/uploads/2015/03/logo_white.png"></div>
      <button type="button" class="overlay-close">Close</button>
      <h4><span style="font-size:20px;"><b>Share</b></span><br>
     <div id="share-overlay-title"> <span style="font-size:4vmin;"><b id="share-title"><?php echo get_the_title( $ID ); ?></b></span></div><br>
      <span class='st_facebook_large' ></span>
<span class='st_twitter_large' ></span>
<span class='st_googleplus_large' ></span>
<span class='st_linkedin_large' ></span>
<br>
<div class="copyboard">
  <div class="copybutton"><button id="copy-button" data-clipboard-text="<?php the_permalink(); ?>" title="Click to copy me.">COPY LINK</button></div>

<div id="copylink">
    <p id="box"><?php the_permalink(); ?></p>



<script type="text/javascript">
var client = new ZeroClipboard( document.getElementById("copy-button") );
client.on( "ready", function( readyEvent ) {
  // alert( "ZeroClipboard SWF is ready!" );
  client.on( "aftercopy", function( event ) {
    // `this` === `client`
    // `event.target` === the element that was clicked
    alert("Copied text to clipboard: " + event.data["text/plain"] );
  } );
} );
</script>


</div>
    </div>
      </h4>
    </div>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if (!wp_is_mobile() && is_front_page()) : ?>

 <div class="entry-featured">
    <?php the_post_thumbnail('Featured-Image-Desktop'); ?>
  </div>
<?php 
endif;
?>  
<?php if (!wp_is_mobile() && is_single() ):  ?> 
<div class="entry-featured" style="background: linear-gradient(to right, rgba(0,48,113,1), rgba(0,112,209,1)); background-position: center; text-align: center;">
<h2 class="single-article">
<span style="font-size: 2rem; text-transform: none;"> <?php echo $pfx_date; ?> </span>
<br>

<span id="title-single"><b><?php echo get_the_title( $ID ); ?></b></span><br>
<div class="header-avatar" style="border-radius: 100%;">
<?php echo get_avatar( get_the_author_meta( 'ID' ), 75); ?>
</div>

<span style="font-size: 2rem; text-transform: none; color:white;" >by <?php echo the_author_firstname(); ?> <?php echo the_author_lastname(); ?> / in <?php echo $firstCategory; ?> </span><br>
</h2>

<button id="trigger-overlay" type="button" class="share-button">SHARE</button>
<br>
<div class="post-nav">
<span class="post-navigation left" style="font-size: 1.5rem;"><?php previous_post(' % ', ' &laquo; ', 'no'); ?></span> <span class="post-navigation right" style="font-size: 1.5rem;">  <?php next_post('%  ', '&raquo;', 'no'); ?></span>
</div>
  </div>
  <?php 
  endif;
   ?>


   <?php if ( wp_is_mobile() && is_front_page() ) : ?>
   <a href="<?php echo get_permalink( $ID ); ?>">
   <div class="post-mobile-layout">
     <div class="post-left-column"><?php the_post_thumbnail('Featured-Image-Mobile'); ?>
     </div>
   <div class="post-right-column">
    <h3 class="post-content"> <span class="cat-date"><b><?php echo $firstCategory; ?></b>&nbsp; / &nbsp;<?php echo $mfx_date; ?></span><br>
      <span class="post-mobile-title"> <b><?php the_titlesmall('', '...', true, '40') ?></b></span><br>

     </h3>

   </div>
</div> 
</a>  
<?php 
endif;
?>

<?php if ( !(wp_is_mobile() && is_front_page())  || is_single() ) { ?>
  <div class="entry-wrap">
<?php if ( is_single()): ?> 
  <div class="fb-like" data-href="http://www.webable.com.bd/" data-width="500px" 
  data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
<?php endif; ?>
    <?php x_get_view( 'integrity', '_content', 'post-header' ); ?>
    <?php x_get_view( 'global', '_content' ); ?>
    <?php if( !wp_is_mobile() && is_single()){ ?>
  <div id="y"><button type="button" class="share-button">SHARE</button></div>
<?php }
?>
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
</article>