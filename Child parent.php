<?php
/* 
Template Name: Repairs Taxonomy
*/
?>
<?php get_header(); ?>

<!-- ===============================================
         JUMBOTRON
    ==================================================== -->
        
    <section class="jumbotron page-section center-middle-parent"
       <?php if( has_post_thumbnail() ): ?>
            style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
        <?php else: ?>
            style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/backgrounds/locations-header.jpg);"
        <?php endif; ?>
    >
        <div class="container center-middle-child">
            <h1><span class="grey-bg">Our Stores</span></h1>
        </div>
    </section>

	
	<!-- ===============================================
	     repairs area start
	==================================================== -->

	<section id="shortcode_1" class=" row-section    ">
	    <div class="container">
	        <div class="row shortcode_service  text-center">
	        <p>Repair Template</p>
	        <?php 

				$args = array(
					'taxonomy' => 'category',
					'hide_empty' => 0, 
					'orderby' => 'slug',
					'order' => 'DSC',  
					'parent' =>0
				);

				if(isset($_GET['parent'])) {
					unset($args['parent']);
					$parent = get_category_by_slug( $_GET['parent'] );
					$args['child_of'] = $parent->term_id;
				}

				$cats = get_categories($args);
				foreach ($cats as $cat) : 

					$cat_link = empty($_GET['parent']) ? esc_url( add_query_arg( 'parent', $cat->slug ) ) : get_category_link($cat->term_id);
					?>
		           <div class="col-md-3 service-item-1 col-sm-6 col-xs-6">
	                    <div class="widget">
	                        <div class="inner">
		                        <div class="round-img">
		                        	<?php 
		                        		$cat_img = get_field('image', $cat);
		                        		$img_link = wp_get_attachment_image_src($cat_img, 'full');
		                        		$finalImg = $img_link[0] ? $img_link[0] : 'https://placehold.it/300x210?text='.$cat->name.'';
		                        	?>
		                        	<a href="<?php echo $cat_link; ?>">
		                        		<img src="<?php echo $finalImg; ?>" alt="">
		                        	</a>
		                        </div>
	                        
	                        	<h3><span class="category-name"><a class="aaa" href="<?php echo $cat_link; ?>"><?php echo $cat->name; ?></a></span> </h3>
	                        
	                        </div>
	                    </div>
		           	</div>

	           <?php endforeach; ?>
	            
	        </div>
	    </div>
	</section>
<?php get_footer(); ?>