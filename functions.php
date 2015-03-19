<?php
// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================function wp_get_thumbnail_url($id){
  
function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}




function wp_get_thumbnail_url($id){
  if(has_post_thumbnail($id)){
    $imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
    $imgURL = $imgArray[0];
    return $imgURL;
  }else{
    return false; 
  }
}


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


function adding_scripts() {

	wp_enqueue_script('classie','http://127.0.0.1/wordpress/wp-content/uploads/2015/02/classie.js' );
	wp_enqueue_script('sharing', 'http://w.sharethis.com/button/buttons.js');
	wp_enqueue_script('myjs','http://127.0.0.1/wordpress/wp-content/themes/x-child-integrity-light/js/myjs.js');
	wp_enqueue_script('ZeroClipboard','http://127.0.0.1/wordpress/wp-content/themes/x-child-integrity-light/js/ZeroClipboard.js');
	}

add_action('wp_enqueue_scripts', 'adding_scripts');
?>

 

