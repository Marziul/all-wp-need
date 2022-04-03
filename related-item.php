                        <ul>
                           <?php
                                $categories = get_the_category($post->ID);
                                if($categories):
                                $category_ids = array();
                                foreach($categories as $individual_category){ $category_ids[] = $individual_category->term_id; }
                                
                                $getrel = new WP_Query(array(
                                    'category__in' => $category_ids,
                                    'post__not_in' => array($post->ID),
                                    'posts_per_page'=> 3,
                                    'caller_get_posts'=>1,
                                    'orderby'=>'rand'
                                ));
                            ?>
                            <?php while( $getrel->have_posts() ): $getrel->the_post(); ?>
                            <li>
                                <?php the_post_thumbnail(); ?>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </li>
                            <?php endwhile;  endif; wp_reset_query(); ?>
                            <div class="clear"></div>
                        </ul>