<?php
/*
* Plugin Name: YouTube Video Embedder
* Description: Use a shortcode to embed a YouTube video
* Version: 1.0
* Author: Scott Lilly
* Author URI: http://scottlilly.com
*/

//[youtubevideo]
function youtubevideo_func( $atts ){
    return '<p style="text-align: center;"><iframe width="560" height="315" src="//www.youtube.com/embed/' . esc_attr($atts['id']) . '" allowfullscreen="allowfullscreen" frameborder="0"></iframe><br/><a title="Link to video on YouTube" href="https://www.youtube.com/watch?v=' . esc_attr($atts['id']) . '" target="_blank">Link to video on YouTube</a></p>';
}
add_shortcode( 'youtubevideo', 'youtubevideo_func' );
?>