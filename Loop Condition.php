<?php if( have_rows('programs_work_with_me_single_items') ): $tlpb=0; ?>
            <?php while( have_rows('programs_work_with_me_single_items') ): the_row(); $tlpb++;  ?>
            
            <?php if($tlpb% 2 == 0){ ?>
            
                 <?php the_sub_field('programs_single_item_info'); ?>
                        
            <?php }
            else{ ?>
            
                 <?php the_sub_field('programs_single_item_info'); ?>
            
            <?php } ?>

            <?php endwhile; ?>

            <?php endif; ?>