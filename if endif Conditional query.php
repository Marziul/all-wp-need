<?php $sl = new WP_Query( array(
'post_type' => 'nationaltop_section',
    'posts_per_page' => 3
)); 
    $sactive = 1;
?>

<?php while( $sl->have_posts('nationaltop_section') ) : $sl->the_post(); ?>


    <?php if ($sactive == 1): ?>

    <div class="col-sm-12">
        <a href="<?php the_permalink(); ?>">
            <div class="national-item">
                <?php the_post_thumbnail(''); ?>
                <h4><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h4>
            </div>
        </a>
    </div>

    <?php else: ?>

    <div class="col-sm-6">
        <a href="<?php the_permalink(); ?>">
            <div class="national-item">
                <?php the_post_thumbnail(''); ?>
                <h5><?php echo wp_trim_words( get_the_title(), 10, '...' ); ?></h5>
            </div>
        </a>
    </div>

    <?php endif; ?>

<?php $sactive++; endwhile; wp_reset_query(); ?>