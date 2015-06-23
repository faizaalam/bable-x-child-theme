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

<!-- 1s. Mobile Main Menu -->

  <?php if ( wp_is_mobile() ) { ?>
  <div class="cd-primary-nav small-1 column mobile">
  <ul>
        <li><a href="http://webable.digital/work/">Work</a></li>
        <li><a href="http://webable.digital/about/">About</a></li>
        <li><a href="http://webable.digital/capabilities/">Capabilities</a></li>
        <li><a href="http://webable.digital/bable/">Bable Blog</a></li>
        <li><a href="http://webable.digital/join/">Join The Team</a></li>
        <li><a href="http://webable.digital/contact/">Contact</a></li>


    </ul>
  </div>

  	<div class="wrap">
  		<a href="http://webable.digital/" class="mobile-logo"><img src="/bable/wp-content/uploads/2015/05/white-logo-new-blog.png"/></a>


 <div class="menu right mobile">
<a class="cd-primary-nav-trigger" href="#">
           <div class="menu cd-menu-icon"></div>
         </a>
       
</div>
</div>

<div class="categories-mobile">
 


  <a href="#" id="mobile-menu-button">CATEGORIES  <i class="fa fa-chevron-down"></i></a>
    <script type="text/javascript">
 jQuery(document).ready(function($){
   $("#mobile-menu-button").click(function(){
        $('.fa-chevron-down').toggleClass('move');
    });
});
   </script>
   
  <div id="hidden-div">
    <ul id="mobile-menu">
      <li class="mobile-menu-li"><a href="http://webable.digital/bable/">Home</a></li>
      
      <li class="mobile-menu-li"><a href="http://webable.digital/bable/category/marketing-branding/">Marketing & Branding</a></li>
         <ul class="sub-menu mobile">
             <li><a href="http://webable.digital/bable/category/marketing-branding/brand-building/">Brand Building</a></li>
             <li><a href="http://webable.digital/bable/category/marketing-branding/advertising/">Advertising</a></li>
             <li><a href="http://webable.digital/bable/category/marketing-branding/market-research">Market Research</a></li>
             <li><a href="http://webable.digital/bable/category/marketing-branding/strategy/">Strategy</a></li>
             <li><a href="http://webable.digital/bable/category/marketing-branding/interviews/">Interviews</a></li>


         </ul>
      <li class="mobile-menu-li"><a href="http://webable.digital/bable/category/creative/">Creative</a></li>
      
          <ul class="sub-menu mobile">
              <li><a href="http://webable.digital/bable/category/creative/design/">Design</a></li>
              <li><a href="http://webable.digital/bable/category/creative/story-telling/">Story Telling</a></li>
              <li><a href="http://webable.digital/bable/category/creative/interactive-technology/">Interactive Technology</a></li>
              <li><a href="http://webable.digital/bable/category/creative/user-experience/">User Experience</a></li>

          </ul>   
      <li class="mobile-menu-li"><a href="http://webable.digital/bable/category/digital-marketing/">Digital Marketing</a></li>
       <ul class="sub-menu mobile">
             <li><a href="http://webable.digital/bable/category/digital-marketing/social-media/">Social Media</a></li>
             <li><a href="http://webable.digital/bable/category/digital-marketing/inbound-marketing/">Inbound Marketing</a></li>
             <li><a href="http://webable.digital/bable/category/digital-marketing/">Marketing Technology</a></li>
             <li><a href="http://webable.digital/bable/category/digital-marketing/marketing-technology/">Mobile Marketing</a></li>
             <li><a href="http://webable.digital/bable/category/digital-marketing/strategy-analytics/">Strategy & Analytics</a></li>
             <li><a href="http://webable.digital/bable/category/digital-marketing/digital-advertising/">Digital Advertising</a></li>

         </ul>
      <li class="mobile-menu-li"><a href="http://webable.digital/bable/category/case-studies/">Case Studies</a></li>
       <ul class="sub-menu mobile">
             <li><a href="http://webable.digital/bable/category/case-studies/social-media-campaign/">Social Media Campaign</a></li>
             <li><a href="http://webable.digital/bable/category/case-studies/event-activation/">Event Activation</a></li>
             <li><a href="http://webable.digital/bable/category/case-studies/identity-design/">Identity Design</a></li>
             <li><a href="http://webable.digital/bable/category/case-studies/digital-advertising/">Digital Advertising</a></li>
             <li><a href="http://webable.digital/bable/category/case-studies/websites/">Websites</a></li>

         </ul>
      <li class="mobile-menu-li"><a href="http://webable.digital/bable/category/news-updates/">News & Updates</a></li>
      <ul class="sub-menu mobile">
             <li><a href="http://webable.digital/bable/category/news-updates/content-of-the-month/">Content Of The Month</a></li>
             <li><a href="http://webable.digital/bable/category/news-updates/events/">Events</a></li>
             <li><a href="http://webable.digital/bable/category/news-updates/guest-posts/">Guest Posts</a></li>
             <li><a href="http://webable.digital/bable/category/news-updates/news/">News</a></li>
             <li><a href="http://webable.digital/bable/category/news-updates/webable-media/">Webable Media</a></li>

         </ul>
      
       
    </ul>

    
  </div>
  </div>

<!-- 1e. Mobile Main Menu -->



<?php } 
?>

  <?php x_get_view( 'global', '_slider-revolution-below' ); ?>
  <?php x_get_view( 'integrity', '_landmark-header' ); ?>
