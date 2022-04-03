                    <?php
                        $tmlb = null;
                        $tmlb = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'posts_per_page' => -1,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'testimonial_cat',
                                    'field' => 'slug',
                                    'terms' => 'bottom',
                                )
                            ),
                        ));
                    ?>

<?php endwhile; wp_reset_postdata(); ?>