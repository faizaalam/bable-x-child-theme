<?php

// =============================================================================
// VIEWS/GLOBAL/_CONTENT-THE-EXCERPT.PHP
// -----------------------------------------------------------------------------
// Display of the_excerpt() for various entries.
// =============================================================================


?>

<div class="entry-content excerpt">
    <!-- 1s- Date in format Month Date,Year -->
    <div id="excerpt-date">
        <?php echo get_the_date( 'F j, Y'); ?>
    </div>

    <!-- 1e- of Date in format Month Date,Year -->

    <!-- 2s- Post Body Content limited to 100 Characters and '...' -->
    <div id="excerpt-text">
<?php if ( is_search() ) { ?>
        <?php $excerpt = get_the_excerpt(); echo mb_strimwidth($excerpt, 0, 90, ".."); ?> </div>
  <?php } 
?>    
<?php if ( is_front_page() || is_category() || is_author() ) { ?>
        <?php $excerpt = get_the_excerpt(); echo mb_strimwidth($excerpt, 0, 108, "..."); ?> </div>
  <?php } 
?>     

    <!-- 2e- Post Body Content limited to 100 Characters and '...' -->

    <!-- 3s- Share Part -->
    <div class="share-category">
        <div id="category">
	 by
            <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
        </div>
        <div class="outer sharing">   
            
            <a href="javascript:window.open('http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>','Sharing <?php echo get_the_title() ?> ','width=500,height=800')"><img src="/bable/wp-content/uploads/icons/1431276849_facebook.svg" width="20" height="20"/> </a>
            <a href="http://www.plus.google.com/" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><img src="/bable/wp-content/uploads/icons/1431278906_circle-google-plus.svg" width="20" height="20"/></a>
            <a href="http://www.linkedin.com/" onclick="popUp=window.open(
        'http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>&source=<?php bloginfo('name'); ?>',
        'popupwindow',
        'scrollbars=yes,width=800,height=400');
    popUp.focus();
    return false"><img src="/bable/wp-content/uploads/icons/1431279855_UberCons_SocialPack_LinkedIn.svg" width="20" height="20"/></a> 
            <a href="javascript:window.open('http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital','Sharing <?php echo get_the_title() ?> ','width=500,height=800')"><img src="/bable/wp-content/uploads/icons/1431278738_circle-twitter.svg" width="20" height="20"/> </a>
        </div>
    </div>

    <!-- 3e- Share Part -->

</div>
