<?php
        $args = array(
                'post_type' => 'product',
        );

        $crate_products = new WP_Query ( $args );
        if ( $crate_products->have_posts() ) : while ( $crate_products->have_posts() ) :
          $crate_products->the_post();

        ?>

        <div id="post-<?php the_ID() ?>" class="three columns product-post">

            <span class="featured-image">
                <?php
                //Display Product Thumbnail
                $product_thumbnail =  woocommerce_get_product_thumbnail();

                ?>

                <a href="<?php  the_permalink()?>" ><?php echo $product_thumbnail ?></a>
            </span>


            <h2 class="product-price"><a href="<?php the_permalink(); ?>"><?php wc_get_template( 'single-product/price.php' ); ?></a></h2>
            <span class="product-name"><?php the_title(); ?></span>

            <?php woocommerce_quantity_input(); ?>

            <div class="add-to-cart-btn">
            <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
            </div>

        </div>

        <?php wp_reset_postdata(); ?>

        <?php endwhile; else: ?>

        <?php endif; ?>

        <?php wp_reset_query(); ?>