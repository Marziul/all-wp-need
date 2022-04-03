            <ul class="nav nav-tabs">
                <?php
                    $panel_id = 1;
                    $args = array(
                        'post_type' => 'tab-item',
                        'posts_per_page' => 8,
                    );
                    
                    $book = new WP_Query( $args ); 
                    while( $book->have_posts() ) : $book->the_post(); 
                    
                ?>
                
                <li<?php if ( $book->current_post == 0 ): ?> class="active"<?php endif; ?>>
                    <a href="#<?php echo $panel_id; ?>" data-toggle="tab"><?php the_title(); ?></a>
                </li>
                
                <?php $panel_id++; endwhile;  wp_reset_postdata(); ?>
            </ul>
            
            
            <!-- Tab panes -->
            <div class="tab-content">
                <?php
                    $panel_id = 1;
                    $args = array(
                    'post_type' => 'tab-item',
                    'posts_per_page' => 8,
                );
                
                $book_2 = new WP_Query( $args ); 
                    while( $book_2->have_posts() ) : $book_2->the_post(); 
                ?>
                
                <div class="tab-pane fade<?php if ( $book_2->current_post == 0 ): ?> in active<?php endif; ?>" id="<?php echo $panel_id; ?>">
                    <div class="row">
                        
                        <div class="col-xs-8 col-sm-10">
                            <?php the_content(); ?>
                        </div> 
                        
                    </div>
                    
                </div>  
                
                <?php $panel_id++; endwhile;  wp_reset_postdata(); ?>
                
            </div>