            <div class="row">
                <div class="col-md-12">
                    <div class="filter_menu">
                        <ul>
                            <?php 
                                $terms = get_terms("references_cat", array('order' => 'DESC')); 
                                $count = count($terms); 
                                if ( $count > 0 ){ 
                            ?>
                                <li class="active" data-filter="*">All</li>
                                <?php foreach ( $terms as $term ) {
                                    echo '<li data-filter=".'.$term->slug.'">'. $term->name .'</li>';
                                } ?>                               
                                                                
                            <?php } ?>
                            
                        </ul>
                    </div>
                    <div class="filter_item">
                        <div class="row">
                                                       
                            <?php
                                $get_fil = new WP_Query(array(
                                    'post_type' => 'references',
                                ));
                            ?>
                            <?php while( $get_fil->have_posts() ): $get_fil->the_post(); ?>
                            
                            <div class="col-sm-4 ref_fil <?php $my_terms = get_the_terms( $post->ID, 'references_cat' ); if( $my_terms && !is_wp_error( $my_terms ) ) { foreach( $my_terms as $termm ){ echo " ".$termm->slug; } } ?>">
                                <a href="<?php the_permalink(); ?>">
                                <div class="project_image">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="the_overlay">
                                       <div class="project_overlay">
                                           <h3><?php the_title(); ?></h3>
                                           <?php the_content(); ?>
                                       </div>
                                    </div>
                                </div>
                                </a>                                 
                            </div>                            
                            
                            <?php endwhile; ?>
                            
                        </div>
                    </div>
                </div>
            </div>