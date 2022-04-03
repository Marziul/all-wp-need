<section class="main-slider">

    <?php
        $mslider = new WP_Query(array(
            'post_type' => 'slider',
            'posts_per_page' => -1
        ));
    ?>

    <?php while( $mslider->have_posts() ): $mslider->the_post(); ?>

        <div class="main-slide-item">
            <?php the_post_thumbnail('slider-image');  ?>
            <div class="slide-info">
                <h2><?php the_title(); ?></h2>
                <h3><?php the_title(); ?></h3>
            </div>
        </div>

    <?php endwhile; wp_reset_query();  ?>

</section>