            <div class="page_banner_area" 
            <?php if( has_post_thumbnail() ): ?>
                style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
            <?php else: ?>
                style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/slider1.jpg);"
            <?php endif; ?>
            >
            </div>