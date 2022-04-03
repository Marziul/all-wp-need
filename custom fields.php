                        <?php 
                            
                            $catname = get_post_meta(get_the_ID(), 'slider_category_name', true);
                            
                            $slider = new WP_Query(array(
                                'post_type' => 'slider-image',
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                        array(
                                            'taxonomy' => 'slider-image',
                                            'field'    => 'name',
                                            'terms'    => $catname,
                                        ),
	                                ),
                                ));
                                
                            $sactive = 1;
                        ?>