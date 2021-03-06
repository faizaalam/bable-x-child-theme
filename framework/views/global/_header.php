<?php

// =============================================================================
// VIEWS/GLOBAL/_HEADER.PHP
// -----------------------------------------------------------------------------
// Declares the DOCTYPE for the site and include the <head>.
// =============================================================================

?>

<!-- Added Font Awesome -->

<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(''); ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"/>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <?php do_action( 'x_before_site_begin' ); ?>

  
 


  <div id="top" class="site"> <!-- BEGIN #top.site -->

  <?php do_action( 'x_after_site_begin' ); ?>