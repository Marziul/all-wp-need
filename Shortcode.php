function amra_shortcode_banabo($atts, $content){
	$att = shortcode_atts(array(
			'title' => '', 
			'img' => ''
	), $atts);
	ob_start();
	?>
		<div class="col-md-4 col-sm-4 xs-margin-bottom-ten">
			<img src="<?php 
			
			$imglink = wp_get_attachment_image_src($att['img'], 'full');
		
			echo $imglink[0];
			
			?>" alt="">
			<p class="text-uppercase letter-spacing-2 black-text font-weight-600 margin-ten no-margin-bottom"><?php echo $att['title']; ?></p>
			<p class="margin-two text-med width-90"><?php echo $content; ?></p>
		</div>
	<?php
	return ob_get_clean();
}
add_shortcode('simple', 'amra_shortcode_banabo');