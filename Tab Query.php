            <ul class="nav nav-tabs">
                
                <?php
                    
                    $book = new WP_Query(
                        
                        $args = array(
                            'post_type' => 'tab-item',
                            'posts_per_page' => 8,
                        ));
                        
                    $panel_id = 1;
                    
                ?>
                
                <?php while( $book->have_posts() ) : $book->the_post(); ?>
                
                <li class="<?php if ( $panel_id == 1 )echo 'active'; ?>">
                    <a href="#<?php echo $panel_id; ?>" data-toggle="tab"><?php the_title(); ?></a>
                </li>
                
                <?php $panel_id++; endwhile; wp_reset_query(); ?>
            </ul>
            
            
            <!-- Tab panes -->
            <div class="tab-content">
               
                <?php
                    
                    $book_2 = new WP_Query(
                        $args = array(
                            'post_type' => 'tab-item',
                            'posts_per_page' => 8,
                        ));
                        
                    $panel_id = 1;
                    
                ?>
                
                <?php while( $book_2->have_posts() ) : $book_2->the_post(); ?>
                
                <div class="tab-pane fade<?php if ( $panel_id == 1 )echo 'in active'; ?>" id="<?php echo $panel_id; ?>">
                    <div class="row">
                        
                        <div class="col-xs-8 col-sm-10">
                            <?php the_content(); ?>
                        </div> 
                        
                    </div>
                    
                </div>  
                
                <?php $panel_id++; endwhile;  wp_reset_query(); ?>
                
            </div>