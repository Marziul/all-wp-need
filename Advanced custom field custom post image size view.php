<ul id="itemContainer">
    <?php $tmlc = new WP_Query( array(
        'post_type' => 'color',
        'posts_per_page' => -1
    )); ?>
    
    <?php while( $tmlc->have_posts() ) : $tmlc->the_post(); ?>
    
    <?php  while ( have_rows('color_all_item') ) : the_row();  ?>
    
    <?php $color_img = get_sub_field('color_item');  ?>
    
        <li>
            <a href="<?php echo $color_img['url']; ?>" rel="prettyPhoto[gallery1]">
                <img src="<?php echo $color_img['sizes']['thumbnail']; ?>" alt="<?php echo $color_img['alt'] ?>" />
            </a>
           <?php the_sub_field('color_name'); ?>
        </li>
        
    <?php endwhile; ?>
    
    <?php endwhile; wp_reset_query(); ?>
    
</ul>