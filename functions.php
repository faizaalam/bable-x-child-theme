<?php
// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

add_image_size('Featured-Image-Mobile', 200, 200, false);
add_image_size('Featured-Image-Desktop', 400, 200, false);


function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

if ( $length && is_numeric($length) ) {
$title = substr( $title, 0, $length );
}

if ( strlen($title)>
0 ) {
$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
if ( $echo )
echo $title;
else
return $title;
}
}


// ------------------------ | Get Post Thumbnail | --------------------------

function wp_get_thumbnail_url($id){
if(has_post_thumbnail($id)){
$imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
$imgURL = $imgArray[0];
return $imgURL;
}else{
return false; 
}
}

// ------------------------ | END of Get Post Thumbnail | --------------------------

// ------------------------ | Post View Count Functions | --------------------------

// ------------------------ | Fetching View Count from its meta | --------------------------

function fetchPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0 View";
}
return $count.' Views';
}

// ------------------------ | END of Fetching View Count from its meta | --------------------------

// ------------------------ | Setting View Count to its meta | --------------------------


function observePostViews($postID) {
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
$count = 0;
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
}else{
$count++;
update_post_meta($postID, $count_key, $count);
}
}

// ------------------------ | END of Setting View Count to its meta | --------------------------

// ------------------------ | END of Post View Count Functions | --------------------------

// ------------------------ | Adding JS Files | --------------------------

function adding_scripts() {

wp_enqueue_script('classie','http://127.0.0.1/wordpress/wp-content/uploads/2015/02/classie.js' ); // Classie JS to manage Classes easily [Not used atm]
wp_enqueue_script('sharing', 'http://w.sharethis.com/button/buttons.js'); // Sharethis provides share buttons through button.js


// ------------------------- | ALL external JS is written in myjs.js | ---------------------------------

wp_enqueue_script('myjs','http://127.0.0.1/wordpress/wp-content/themes/x-child-integrity-light/js/myjs.js'); 

// ------------------------- | END of ALL external JS is written in myjs.js | ---------------------------------

wp_enqueue_script('ZeroClipboard','http://127.0.0.1/wordpress/wp-content/themes/x-child-integrity-light/js/ZeroClipboard.js'); // ZeroClipboard for Copying text to clipboard
}

add_action('wp_enqueue_scripts', 'adding_scripts');
?>


