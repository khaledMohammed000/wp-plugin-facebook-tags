<?php

/*
Plugin Name: My Facebook Tags
Plugin URI: https://github.com/khaledMohammed000/wp-plugin-facebook-tags
Description: Plugin adds some facebook open graph tags to our single posts.
Version: 1.0
Author: Mohammed
Author URI: http://khaledmohammed.me
License: GPL2
*/


function my_facebook_tags(){
	if(is_single()){
		?>
<meta property="og:title" content="<?php the_title()?>"/>
<meta property="og:site_name" content="<?php bloginfo('name')?>"/>
<meta property="og:url" content="<?php the_permalink()?>"/>
<meta property="og:description" content="<?php the_excerpt()?>"/>
<meta property="og:type" content="article"/>

<!--if weird syntax in PHP @ http://php.net/manual/en/control-structures.alternative-syntax.php-->
<?php if(has_post_thumbnail()) :$image = wp_get_attachment_image_src(get_post_thumbnail_id(),'large'); ?>
	<meta property="og:image" content="<?php echo $image[0]; ?>">
<?php endif;?>
<?php
	}//end of if()
}//end of my_facebook_tags()

add_action('wp_head','my_facebook_tags');
