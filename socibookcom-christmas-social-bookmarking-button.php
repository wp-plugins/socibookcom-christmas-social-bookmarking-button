<?php
/*
Plugin Name: SociBook.com Christmas Social Bookmarking Button
Version: 0.1
Plugin URI: http://wordpress.org/extend/plugins/socibookcom-christmas-social-bookmarking-button/
Description: They are 3 specialy designed buttons for your site or blog from socibook.com. Put the button to your blog. Visit <a href="http://socibook.com" target="_blank">plugin page</a>.
Author: Biser Markov
Author URI: http://socibook.com/
*/

function add_me($content) {

    global $post;
	
	$my_width = '100%';
	
	$my_align = 'left';
	
	$my_images_folder = get_settings('home') . '/wp-content/plugins/socibookcom-christmas-social-bookmarking-button/images/';
	
	$my_link = get_permalink($post->ID);	
    $my_title = get_the_title($post->ID);

	if ( !is_feed() && !is_page() ) {
		$content .= "\n\n" . '<!-- Begin socibookcom-christmas-social-bookmarking-button plugin -->' . "\n"
                  . '<!-- http://wordpress.org/extend/plugins/socibookcom-christmas-social-bookmarking-button/ -->' . "\n"
                  . '<div style="padding:16px 0 16px 0;text-align:' . $my_align . ';width:' . $my_width . ';">' . "\n"
				  
                  . '<a href="http://socibook.com/submit.php?url=' . $my_title . '&amp;url=' . $my_link . '" target="_blank" rel="nofollow" title="SociBook"><img src="' . $my_images_folder . 'button.jpg" style="width:130px;height:28px;border:0px;" alt="SociBook" title="SociBook" /></a>' . "\n"		
				  // if you want other button just put "//" infront of the code of the button and del the "//" from the button you want
                 // . '<a href="http://socibook.com/submit.php?url=' . $my_title . '&amp;url=' . $my_link . '" target="_blank" rel="nofollow" title="SociBook"><img src="' . $my_images_folder . 'button2.jpg" style="width:130px;height:28px;border:0px;" alt="SociBook" title="SociBook" /></a>' . "\n"				  
                //  . '<a href="http://socibook.com/submit.php?url=' . $my_title . '&amp;url=' . $my_link . '" target="_blank" rel="nofollow" title="SociBook"><img src="' . $my_images_folder . 'button3.jpg" style="width:130px;height:28px;border:0px;" alt="SociBook" title="SociBook" /></a>' . "\n"				  
                  . '</div>' . "\n"
				  . '<!-- End socibookcom-christmas-social-bookmarking-button plugin -->' . "\n\n";				  
    }				  
	return $content;
}

add_filter('the_content', 'add_me', 1097);

?>