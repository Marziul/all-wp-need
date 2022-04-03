  global $post;
  
                
    $query_args = array(
        'post__not_in' => array( $post->ID ), 
        'posts_per_page' => -1,
        'no_found_rows' => 1,
        'post_status' => 'publish',
        
        'orderby' => 'meta_value_num',
        'meta_key' => '_price',
        'order' => 'asc',
        
        'post_type' => 'product',
        'tax_query' => array(
            array(
                'taxonomy' => 'product_cat',
                'field' => 'id',
                'terms' => array( get_queried_object()->term_id ),
                'include_children' => false,
            )));
                
            

                $the_query = new WP_Query( $query_args );

                while ( $the_query->have_posts() ) {
                   $the_query->the_post(); global $product;
                   
                   
                    
                    
                    /**
                     * Hook: woocommerce_shop_loop.
                     *
                     * @hooked WC_Structured_Data::generate_product_data() - 10
                     */
                    do_action( 'woocommerce_shop_loop' );
                    
                    
                     wc_get_template_part( 'content', 'product' );
                }
                
            }
        ?>
        <?php woocommerce_product_loop_end();
        
        
			wp_reset_query();
        
        ?>
