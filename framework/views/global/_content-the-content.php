<?php

// =============================================================================
// VIEWS/GLOBAL/_CONTENT-THE-CONTENT.PHP
// -----------------------------------------------------------------------------
// Display of the_content() for various entries.
// =============================================================================

?>

<div class="entry-content content">

<!-- 1s- Desktop | Post Page | Sharing Above Content -->

<?php if ((!wp_is_mobile()) && is_single()) { ?>

  <div class="post-full sharing">
<a class="follow t" href="javascript:window.open('http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital','Sharing <?php echo get_the_title() ?> ','width=500,height=800')"><i class="fa fa-twitter"></i><?php echo pssc_twitter(); ?> Tweets</a>
<a  class="follow i" href="http://www.linkedin.com/" onclick="popUp=window.open(
        'http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>&source=<?php bloginfo('name'); ?>',
        'popupwindow',
        'scrollbars=yes,width=800,height=400');
    popUp.focus();
    return false"><i class="fa fa-linkedin"></i><?php echo pssc_linkedin(); ?> Updates</a> 
<a class="follow g" href="http://www.plus.google.com/" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i><?php echo pssc_gplus(); ?> Posts</a>
<a class="follow f" href="javascript:window.open('http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>','Sharing <?php echo get_the_title() ?> ','width=500,height=800')" ><i class="fa fa-facebook"></i> <?php echo pssc_facebook(); ?> Shares</a>

          
  </div>

<?php } ?>

<!-- 1e- Desktop | Post Page | Sharing Above Content -->

<!-- 2s- Mobile | Post Page | Sharing Above Content -->
<?php if ( wp_is_mobile() && is_single() ) { ?> 
<div class="mobile sharing">
             
            <a  class="share-mobile t" href="http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital" target="_blank"><i class="fa fa-twitter"></i></a>
            <a  class="share-mobile i" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>&source=<?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a> 
            <a   class="share-mobile g"  href="https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>" target="_blank"><i class="fa fa-google-plus"></i></a> 
            <a class="share-mobile f" href="http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
            </div>

<?php } ?>

<!-- 2e- Mobile | Post Page | Sharing Above Content -->

<!-- 3s- Universal | Post Page | Facebook like above content -->
<?php if ( is_single() ) { ?> 
  <div class="fb-like" data-href="<?php echo get_permalink(); ?>" data-width="500px" 
  data-layout="standard" data-action="like" data-show-faces="true" data-share="false"></div>
<?php } ?>
<!-- 3e- Universal | Post Page | Facebook like above content -->  

<!-- 4s- Universal | Post Page | The Content -->  

    <?php the_content(); ?>

<!-- 4e- Universal | Post Page | The Content -->  

<!-- 5s- Universal | Post Page | The Unknown -->

  <?php x_link_pages(); ?>

<!-- 5e- Universal | Post Page | The Unknown -->

<!-- 6s- Desktop | Post Page | Sharing Below Content -->

  <?php if ((!wp_is_mobile()) && is_single()) { ?>
 <div class="post-full sharing">
<a class="follow t" href="javascript:window.open('http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital','Sharing <?php echo get_the_title() ?> ','width=500,height=800')"><i class="fa fa-twitter"></i><?php echo pssc_twitter(); ?> Tweets</a>
<a  class="follow i" href="http://www.linkedin.com/" onclick="popUp=window.open(
        'http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>&source=<?php bloginfo('name'); ?>',
        'popupwindow',
        'scrollbars=yes,width=800,height=400');
    popUp.focus();
    return false"><i class="fa fa-linkedin"></i><?php echo pssc_linkedin(); ?> Updates</a> 
<a class="follow g" href="http://www.plus.google.com/" onclick="popUp=window.open('https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>', 'popupwindow', 'scrollbars=yes,width=800,height=400');popUp.focus();return false"><i class="fa fa-google-plus"></i><?php echo pssc_gplus(); ?> Posts</a>
<a class="follow f" href="javascript:window.open('http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>','Sharing <?php echo get_the_title() ?> ','width=500,height=800')" ><i class="fa fa-facebook"></i> <?php echo pssc_facebook(); ?> Shares</a>           
  </div>

<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>

</div>

<!-- 9s- Desktop | Post Page | Sidebar -->

<aside class="<?php x_sidebar_class(); ?>" role="complementary">
    <?php if ( get_option( 'ups_sidebars' ) != array() ) : ?>
      <?php dynamic_sidebar( apply_filters( 'ups_sidebar', 'sidebar-main' ) ); ?>
    <?php else : ?>
      <?php dynamic_sidebar( 'sidebar-main' ); ?>
    <?php endif; ?>
</aside>

<!-- 9e- Desktop | Post Page | Sidebar -->

<?php } ?>

<!-- 6e- Desktop | Post Page | Sharing Below Content -->

<?php if ( wp_is_mobile() && is_single() ) { ?> 

<!-- 7s- Mobile | Post Page | Sharing Below Content -->

<div class="mobile sharing">
            <a  class="share-mobile t" href="http://twitter.com/intent/tweet?status=<?php echo urlencode(get_the_title()); ?>+<?php echo wp_get_shortlink(); ?> via @WebAbleDigital" target="_blank"><i class="fa fa-twitter"></i></a>
            <a  class="share-mobile i" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>&source=<?php bloginfo('name'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a> 
            <a   class="share-mobile g"  href="https://plus.google.com/share?url=<?php echo get_permalink($ID); ?>" target="_blank"><i class="fa fa-google-plus"></i></a> 
            <a class="share-mobile f" href="http://www.facebook.com/share.php?u=<?php echo get_permalink($ID); ?>&title=<?php echo urlencode(get_the_title()); ?>" target="_blank"><i class="fa fa-facebook"></i></a> 
            </div>

<!-- 7e- Mobile | Post Page | Sharing Below Content -->

<!-- 8s- Mobile | Post Page | Post Navigation -->

<div class="post-navigation-mobile">

<div class="previous-link-mobile">
<?php next_post(' %  ', '&laquo; &laquo; <b>PREVIOUS:</b> ', 'yes'); ?> </div>
<div class="next-link-mobile">
<?php previous_post('%   ', '&raquo; &raquo; <b>NEXT: </b>', 'yes'); ?>
</div>
</div>

<!-- 8e- Desktop | Post Page | Post Navigation -->

<?php } ?>


