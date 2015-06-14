<?php
// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to X in this file.
// =============================================================================

add_image_size('Featured-Image-Mobile', 200, 200, false);
add_image_size('Featured-Image-Desktop', 338, 200, false);


// 1s- Filtering Long Titles

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

// 1e- Filtering Long Titles


// 2s- Get Post Thumbnail

function wp_get_thumbnail_url($id, $size){
if(has_post_thumbnail($id)){
$imgArray = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
$imgURL = $imgArray[0];
$info = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'Featured-Image-Desktop' );
$infoURL = $info[0];
    if($size == 0)
    {
        return $imgURL;
    }

    else if ($size == 1) 
    {
        return $infoURL;
    }
}
else   {
    return false; 
        }
}

// 2e- END of Get Post Thumbnail

// 3s- Post View Count Functions

// 3.1s- Fetching View Count from its meta

function fetchPostViews($postID){
$count_key = 'post_views_count';
$count = get_post_meta($postID, $count_key, true);
if($count==''){
delete_post_meta($postID, $count_key);
add_post_meta($postID, $count_key, '0');
return "0";
}

$count_english_format = number_format($count);
return $count_english_format;
}

// 3.1e- Fetching View Count from its meta

// 3.2s- Setting View Count to its meta


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

// 3.2e- Setting View Count to its meta

// 3e- Post View Count Functions


// 4s- Adding Fields on User Profiles Page
	
function modify_user_contact_methods( $user_contact ) {

	/* Add user contact methods */
	$user_contact['linkedin'] = __( 'LinkedIn Profile' ); 
	$user_contact['instagram'] = __( 'Instagram Profile' ); 

	return $user_contact;
}
add_filter( 'user_contactmethods', 'modify_user_contact_methods' );

// 4e - Adding Fields on User Profiles Page


// 5s- Adding JS Files

function adding_scripts() {

// 5.1s- ALL external JS is written in myjs.js

wp_enqueue_script('myjs','http://s205830.gridserver.com/bable/wp-content/themes/x-child-integrity-light/js/myjs.js',array('jquery')); 

// 5.1e- ALL external JS is written in myjs.js

}

add_action('wp_enqueue_scripts', 'adding_scripts');

// 5e- Adding JS Files

// 6s- Setup Post Sharing

function shadable_post_sharing() {

	function limit_words($string, $word_limit)
{
    $words = explode(" ",$string);
    return implode(" ",array_splice($words,0,$word_limit));
}

    global $post; 
    $postid = get_the_ID();
    $thumb_id = get_post_thumbnail_id();
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'large', true);
    $thumb_url = $thumb_url_array[0];
    $content_post = get_post_field( 'post_content' , $postid );
    $content_post_filtered = preg_replace('/<a href=\"(.*?)\">(.*?)<\/a>/', "\\2", $content_post);
    $content_post_filtered1 = strip_tags($content_post_filtered);
    $content_post_final = limit_words($content_post_filtered1, 20);
    $output = '<meta property="og:image" content="' . $thumb_url . '"/>';
    $output .= '<meta property="og:description" content="'. $content_post_final . ' Read More..."/>'; 
    echo $output;
    
};
 add_action('wp_head','shadable_post_sharing');   

// 6e- Setup Post Sharing

// 7s- Author Page Setup 

function author_page_setup() {
  if ( is_author() ) {
    $id = get_the_author_meta( 'ID' );
    echo do_shortcode('[author id="'.$id.'"]');
  }
};
add_action('x_before_view_global__index', 'author_page_setup');

// 7e- Author Page Setup 

?>
