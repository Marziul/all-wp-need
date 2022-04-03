

function pippin_filter_content_sample($content) {
	if(is_single()) {
		$new_content = '[sc name="postfor"]';
		$content .= $new_content;	
	}	
	return $content;
}
add_filter('the_content', 'pippin_filter_content_sample');
