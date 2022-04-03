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
                        
                        <?php while( $slider->have_posts() ): $slider->the_post() ?>
                           
                            <div class="item<?php if ($sactive == 1) echo ' active'; ?>">
                                <div class="slider_content">
                                    <?php the_post_thumbnail('slider-img'); ?>
                                </div>
                            </div>
                            
                        <?php $sactive++; endwhile; wp_reset_query(); ?>





				<?php $ssactive = 0; foreach( $aimages as $aimage_id ): ?>
				
					<a href="#" class="dot <?php if ($ssactive == 0) echo ' current'; ?> "></a>
				
				<?php $ssactive++; endforeach; ?>
				




    <div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
                <div class="slide-bulletz">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <ol class="carousel-indicators slide-indicators">
                                   
                                    <?php $sl = new WP_Query( array(
                                        'post_type' => 'slider',
                                        'posts_per_page' => -1
                                    )); 
                                        $ssactive = 0;
                                    ?>
                                    
                                    <?php while( $sl->have_posts() ) : $sl->the_post();   ?>
                                        <li data-target="#slide-list" data-slide-to="<?php echo $ssactive; ?>" class="<?php if ($ssactive == 0) echo ' active'; ?>"></li>
                                        
                                    <?php $ssactive++; endwhile; wp_reset_query(); ?>
                                </ol>                            
                            </div>
                        </div>
                    </div>
                </div>
                
            <div class="carousel-inner" role="listbox">
               
            <?php $sl = new WP_Query( array(
                'post_type' => 'slider',
                'posts_per_page' => -1
            )); 
                $sactive = 1;
                
            ?>
            
            <?php while( $sl->have_posts() ) : $sl->the_post();   
                $image_id=get_post_thumbnail_id();
                $image_url = wp_get_attachment_image_src($image_id,'img-polaroid');
                $image_url= $image_url[0]; 
            ?>
               
                <div class="item<?php if ($sactive == 1) echo ' active'; ?>">
                    <div class="single-slide">
                        <div class="slide-bg slide-one" style="background-image: url('<?php echo $image_url; ?>')"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2><?php the_title(); ?></h2>
                                                <?php the_content(); ?>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                <?php $sactive++; endwhile; wp_reset_query(); ?>
                
            </div>

        </div>        
    </div> <!-- End slider area -->










