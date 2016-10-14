<?php
// arrow syntax
//http://stackoverflow.com/questions/14037290/what-does-this-mean-in-php-or
//adding email functionality when a post is posted

function post_publish_notification($ID , $post){
	$email = get_the_author_meta('user_email',$post->post_author);
	$subject = 'Published '.$post->post_title;
	$message = 'We just Published your post '.$post->post_title.
	           ' take a look at : '. get_permalink($ID);
	wp_mail($email,$subject,$message);
}

add_action('publish_post','post_publish_notification',10,2);