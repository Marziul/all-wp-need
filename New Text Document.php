 <?php if( has_post_thumbnail() ): ?>
        style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
    <?php else: ?>
        style="background-image: url(<?php echo esc_url(get_template_directory_uri()); ?>/images/default-page-banner.jpg);"
    <?php endif; ?>