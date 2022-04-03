<?php  $content = get_the_content();
$trimmed_content = wp_trim_words( $content, 20, '' ); ?>
                            
<p><?php  echo $trimmed_content; ?></p>
                          
<a class="work-that-btn" href="<?php the_permalink(); ?>"> Read More</a>