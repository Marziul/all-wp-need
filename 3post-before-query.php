<?php 
                    $prdquery = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => -1,
                    ));
                    
                    $bdr = 1;
                ?>
                
                <?php while ( $prdquery->have_posts() ) : $prdquery->the_post(); ?>
                    
                    <div class="col-sm-4">
                        <div class="single-post">
                            <h3><?php the_title(); ?></h3>
                            <div class="post-img">
                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            </div>
                            <p><?php the_content(); ?></p>
                        </div>
                    </div> 
                    
                    <?php if($bdr%3 == 0){echo '<div class="post-border"></div>';} ?>
                <?php $bdr++; endwhile; ?>