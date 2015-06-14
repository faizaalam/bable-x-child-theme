<?php

// =============================================================================
// VIEWS/INTEGRITY/WP-FOOTER.PHP
// -----------------------------------------------------------------------------
// Footer output for Integrity.
// =============================================================================
$pfx_date = get_the_date( 'F j, Y', $post_id );
$popimage = wp_get_attachment_image_src(get_the_ID(), 'Featured-Image-Desktop');
?>


<!--  Post Page - Desktop - Below Post Body -->
<?php if ( !wp_is_mobile() && is_single() ) { ?>  
  <div class="x-container-fluid max width cf popularposts">

<div class="post-wrap">

<!--  Quering posts to order by post views count in descending order and display only 3 posts -->
    <?php
query_posts('meta_key=post_views_count&showposts=4&orderby=meta_value_num&order=DESC');
?>
 <!--  END of Quering posts to order by post views count in descending order and display only 3 posts -->
  <div class="popular-on-bable"><h4>Check These Out <br><span class="readthisarrow"> ↓ </span></h4>


<div class="popularperposts">
<?php while(have_posts()) : the_post(); ?>
  

  <div class="module lr" style="background-image: linear-gradient(to bottom, rgba(13,48,107,0.6), rgba(13,48,107,0.6)), url('<?php echo wp_get_thumbnail_url($id,1) ?>')">
<a href="<?php echo get_permalink( $ID ); ?>" class="popularpostlink">
  <b><span class="popular-title"><?php $title = get_the_title($ID); echo mb_strimwidth($title, 0, 50, ".."); ?></b></span><br>
  <span id="post-info" > by  <?php the_author(); ?> on <?php echo $pfx_date; ?></span>
</a>
</div>

  
<?php endwhile; ?>

<?php wp_reset_query(); ?>
</div>

</div>
   
<!-- Display each Post Content Box  -->

</div>
</div>
<?php } ?>




<!-- ------------------------------------ -->

 <?php if ( wp_is_mobile() ) {  ?>
<div class="mobile-subscribe">
  <script type="text/javascript">
jQuery(function ($) {
  wpmcpre0 = function (f){
    $(f).find('[wpmcerr="gen"]').html('');
    $(f).find('input[type="text"]').each(function(){
      $(f).find('[wpmcerr="gen"]').html('');
      err = wpmcvalid($(this).attr('wpmcfield'),$(this).attr('wpmcreq'),this.value);
      if(err){
        $(this).addClass('wpmcerror');
        if($(this).attr('wpmcerrs') == 'true'){
          $this = $(this);
          $this.addClass('wpmcerrora');
          setTimeout(function() {
            $this.removeClass('wpmcerrora');
          }, 500);
        }
        if($(this).attr('wpmcerrs') == 'par'){
          $this = $(this).parent();
          $this.addClass('wpmcerrora');
          setTimeout(function() {
            $this.removeClass('wpmcerrora');
          }, 500);
        }
        $(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html(err);
      }
      else{
        $(this).removeClass('wpmcerror');
        $(f).find('[wpmcerr="'+$(this).attr('wpmcfield')+'"]').html('');
      }
    });
    if($(f).find('.wpmcerror').length){
      $('.wpmchimpa-mainc').addClass('wpmcerrora');
      setTimeout(function() {
        $('.wpmchimpa-mainc').removeClass('wpmcerrora');
      }, 500);
      return false;
    }
    $(f).find('.wpmchimpa-signal').addClass('signalshow');
    return true;
  }
  wpmcpost0 =  function (f,d){
    $(f).find('.wpmchimpa-signal').removeClass('signalshow');
    if(d == 1){
      if(wpmcsucurl()){$('.wpmchimpa-overlay-bg').hide();}
      else if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
        $(f).find('form').fadeOut(function () {
          $(f).find('[wpmcerr="gen"]').addClass('wpmchimpa-done').html(wpmchimpa.suc_msg);
        });
    }
    wpmchimpa_unlock_func(f);
    return false;
    }
    if(d == 214){
      if(wpmcsucurl()){$('.wpmchimpa-overlay-bg').hide();}
      else if(wpmchimpa.suc_sub == 'suc_msg' && wpmcisset(wpmchimpa.suc_msg)){
        $(f).find('form').fadeOut(function () {
          $(f).find('[wpmcerr="gen"]').addClass('wpmchimpa-done').html(errmsg[2]);
        });
    }
      wpmchimpa_unlock_func(f);
    }
    else if(d == 0){
      $(f).find('[wpmcerr="gen"]').html(errmsg[4]);
    }
    else $(f).find('[wpmcerr="gen"]').html(errmsg[3]);
  }
});
</script>

<style type="text/css">
  
.wpmchimpab {
  min-height: 100px;
  display: block;
  border: solid #dadbdc;
  border-width: 1px 0;
  padding: 50px;
  display: none;
  background:#27313b;}
.wpmchimpab h3{
  font-size: 18px;
  color:#0d316b;}
.wpmchimpab p{
  font-size: 14px;
  margin-bottom: 10px;
  line-height: 20px;
    font-size:16px;}

.wpmchimpab .wpmchimpa-groups{
  display: block;
  clear: both;
}
.wpmchimpab .wpmchimpa-item{
  float:left;
  margin: 2px 15px;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] {
  display: none;
  cursor: pointer;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox']:focus,
.wpmchimpab .wpmchimpa-item input[type='checkbox']:active {
  outline: none;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label {
  cursor: pointer;
  display: inline-block;
  position: relative;
  padding-left: 25px;
  margin-right: 10px;
  color: #686868;
line-height: 14px;
  }

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before,
.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:after {
  content: '';
  display: inline-block;
  width: 18px;
  height: 18px;
  left: 0;
  bottom: 0;
  text-align: center;
  position: absolute;
}

.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:before {
  background-color: #ACACAC;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 3px;
  }
.wpmchimpab .wpmchimpa-item input[type='checkbox']:checked + label:before {
 -moz-box-shadow: inset 0 0 0 10px #158EC6;-ms-box-shadow: inset 0 0 0 10px #158EC6;-o-box-shadow: inset 0 0 0 10px #158EC6;-webkit-box-shadow: inset 0 0 0 10px #158EC6;box-shadow: inset 0 0 0 10px #158EC6;}


.wpmchimpab .wpmchimpa-item input[type='checkbox'] + label:hover:after, .wpmchimpab input[type='checkbox']:checked + label:after {
width: 20px;
height: 18px;
content:'';
background: no-repeat center;
background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9IiNmZmYiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTJweCIgaGVpZ2h0PSIxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBvbHlnb24gcG9pbnRzPSIxNDIuOCwzMjMuODUgMzUuNywyMTYuNzUgMCwyNTIuNDUgMTQyLjgsMzk1LjI1IDQ0OC44LDg5LjI1IDQxMy4xLDUzLjU1Ii8+PC9zdmc+');
}
.wpmchimpab .wpmchimpa-item input[type='checkbox']:not(:checked) + label:hover:after {
background-image:url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGZpbGw9IiM0NDQiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTJweCIgaGVpZ2h0PSIxMnB4IiB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgZW5hYmxlLWJhY2tncm91bmQ9Im5ldyAwIDAgNTEyIDUxMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHBvbHlnb24gcG9pbnRzPSIxNDIuOCwzMjMuODUgMzUuNywyMTYuNzUgMCwyNTIuNDUgMTQyLjgsMzk1LjI1IDQ0OC44LDg5LjI1IDQxMy4xLDUzLjU1Ii8+PC9zdmc+');
opacity: 0.5;
}

.wpmchimpab input[type="text"] {
    display: inline-block;
    width:55%;
    background:#fff;
    height:45px;
    text-align: center;
    margin-bottom:12px;
    border:2px solid #fff;
    outline:0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    float: left;color:#7a7a7a; border:1px solid #dddddd;}

.wpmchimpab input[type="text"].wpmcerror{
  border: 1px solid red;
}
.wpmchimpab .wpmcinfierr{
  display: block;
  height: 12px;
  line-height: 12px;
  margin-top: -12px;
  font-size: 11px;
  color: red;
  }
.wpmchimpab input[type="email"]:focus,.wpmchimpab input[type="text"]:focus {
    border:2px solid #ddd;
     border:1px solid #dddddd;}
.wpmchimpab .wpmchimpa-subs-button{
  display:inline-block;
  vertical-align: initial;
  text-align: center;
  width: 150px;
    height:45px;
    background: #62bc33;
  color:#fff;
    cursor:pointer;
    -webkit-box-shadow:none;
    -moz-box-shadow:none;
    -ms-box-shadow:none;
    -o-box-shadow:none;
    box-shadow:none;
    clear:both;
    text-shadow:none;
    border: 0;
    border-radius: 1px;
    -webkit-border-radius: 1px;
    -moz-border-radius: 1px;
    -ms-border-radius: 1px;
    -o-border-radius: 1px;
  color:#ffffff;background:#ed4523;}
.wpmchimpab .wpmchimpa-subs-button::before{
  content: 'SUBSCRIBE';
  display: block;
  position: relative;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.wpmchimpab .wpmchimpa-subs-button:hover{

    background:#8BD331;
   
  color:#fff;
  background:#ed4525;color:#ffffff;}

.wpmchimpab .wpmchimpa-signalc {
height: 40px;
  margin: 10px;
  text-align: center;
}
.wpmchimpab .wpmchimpa-signal {
display: none;
}
.wpmchimpab .wpmchimpa-signal.signalshow {
  display: inline-block;
}
.wpmchimpab .wpmchimpa-feedback{
margin: -40px 0 22px;
  clear:both;
height: 16px;
position: relative;
  color:#7a7a7a;}
.wpmchimpab .wpmchimpa-feedback.wpmchimpa-done{
  margin: 0;
  height: auto;
}
@media only screen and (max-width:1024px) {
  .wpmchimpab{
    padding: 10px;
  }

}
@media only screen and (max-width:420px) {
  .wpmchimpab input[type="email"], .wpmchimpab input[type="text"],
  .wpmchimpab .wpmchimpa-subs-button{
    width:100%;
  }
}
</style>
<div class="wpmchimpa-reset wpmchimpab chimpmatecss wpmchimpselector" id="wpmchimpab" style="display: block;">
  <h3>Get Email Updates</h3>
  <p>Subscribe to our lovely newsletter. You can also receive an eBook for FREE.</p>
  <form action="" method="post">
                <input type="text" name="email" wpmcfield="email" wpmcreq="true" wpmcerrs="true" placeholder="Email address" required="">
        <div class="wpmcinfierr" wpmcerr="email"></div>
    <div class="wpmchimpa-subs-button" wpmcpre="wpmcpre0" wpmcpost="wpmcpost0"></div>
    <input type="hidden" name="action" value="wpmchimpa_add_email_ajax">
        <div class="wpmchimpa-signalc"><div class="wpmchimpa-signal"><style type="text/css">#wpmchimpab .sp1 {border:3px solid #000;border-radius:30px;height:30px;width:30px;margin: 0 auto;opacity:0;-webkit-animation: wpmchimpabsp1 1s ease-out infinite;animation: wpmchimpabsp1 1s ease-out infinite;  }@-webkit-keyframes wpmchimpabsp1 {0% {-webkit-transform:scale(0.1);opacity: 0;}50% {opacity:1;}100%{-webkit-transform:scale(1.2);opacity:0;}}@keyframes wpmchimpabsp1 {0% {transform:scale(0.1);opacity: 0;}50% {opacity:1;}100% {transform:scale(1.2);opacity:0;}}</style><div class="sp1"></div></div></div>
  </form>
  <div class="wpmchimpa-feedback" wpmcerr="gen"></div><div style="clear:both"></div>
</div>
  </div>
 

  <div class="footer-mobile" style="text-align: center;">
    <a href="#"><img src="/bable/wp-content/uploads/2015/05/Vector-Smart-footer.png" style="width=85px;"></a><br>
<div class="social-icons mobile">
      <ul class="text-align">
        <li><a href="https://twitter.com/WebAbleDigital" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/company/3544530?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A2-1-2%2CtarId%3A1432888439756%2Ctas%3Awebable"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://plus.google.com/+WebableBd/videos"  target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="https://www.facebook.com/WebAble?fref=ts"  target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://instagram.com/webabledigital/"  target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.pinterest.com/WebAbleDigital/"  target="_blank"><i class="fa fa-pinterest"></i></a></li>
        
      </ul>
    </div>


  <p id="copyright-mobile" style="padding: 1.5%; text-transform: uppercase; font-size: 0.55em;letter-spacing: 0.5px; color: #a2a2a2;">© 2015 WebAble Digital. All Rights Reserved.</p>

  </div>
    <?php } 
   ?>

<?php if ( !(wp_is_mobile() ) && is_single() ) { 
echo do_shortcode( '[chimpmate]' ); 
}
?>

<!-- FOOTER -->

  <?php if ( x_get_option( 'x_footer_bottom_display' ) == 1 ) : ?>

  <?php if ( !wp_is_mobile() ) { ?>

    <footer class="footer-bottom" role="contentinfo">
      <div class="x-container-fluid max width">

	 <div class="center-div"><img src="/bable/wp-content/uploads/2015/05/Vector-Smart-footer.png" class="logo-footer"/>

    <div class="list">
      <ul class="text-align"> 
        <li><a href="/pdf/WebAble_BrandElements.pdf" target="_blank"> 
            <h7> BRAND ELEMENTS &nbsp;  </h7></a>| &nbsp;</li>
        <li><a href="http://webable.digital/bable" target="_blank"> 
            <h7> THE BABLE BLOG &nbsp;  </h7></a>| &nbsp;</li>
        <li> <a href="http://webable.digital/work" target="_blank"> 
            <h7> OUR WORK &nbsp; </h7></a>| &nbsp; </li>
        <li><a href="http://webable.digital/capabilities" target="_blank"> 
            <h7> OUR SERVICES &nbsp; </h7></a> | &nbsp;</li>
        <li> <a href="http://webable.digital/join" target="_blank"> 
            <h7> JOIN THE TEAM </h7></a> &nbsp;</li>
      </ul>
    </div>
    <div class="social-icons">
      <ul class="text-align">
         <li><a href="https://twitter.com/WebAbleDigital"  target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.linkedin.com/company/3544530?trk=tyah&trkInfo=clickedVertical%3Acompany%2Cidx%3A2-1-2%2CtarId%3A1432888439756%2Ctas%3Awebable"  target="_blank"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="https://plus.google.com/+WebableBd/videos"  target="_blank"><i class="fa fa-google-plus"></i></a></li>
        <li><a href="https://www.facebook.com/WebAble?fref=ts"  target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://instagram.com/webabledigital/"  target="_blank"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://www.pinterest.com/WebAbleDigital/"  target="_blank"><i class="fa fa-pinterest"></i></a></li>
      </ul>
    </div>
    <div class="text-f"> 
      <h8>©2015 WEBABLE DIGITAL. ALL RIGHTS RESERVED</h8>
    </div>
  </div>

      </div>
    </footer>

    <?php } 
   ?>



  




  <?php endif; ?>

<?php x_get_view( 'global', '_footer' ); ?>


