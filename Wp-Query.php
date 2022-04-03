                <?php 
                    $prdquery = new WP_Query(array(
                        'post_type' => 'product-item',
                        'posts_per_page' => -1,
                    ));
                ?>
                
                <?php while( $prdquery->have_posts() ): $prdquery->the_post() ?>
                    
                    
                    
                    
                <?php endwhile; wp_reset_query(); ?>