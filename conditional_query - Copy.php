<?php
/**
 * Template Name: Gallery Page
 */

get_header(); ?>

<main>
    <section class="content imagesList">
        <section class="toBeSplitted imagesListContainer gallery" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
            <ul class="images" style="opacity: 1;">
			
    
    <?php
                $args=array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1
                );
                
                $loop = get_posts($args);
		
                $chunk = array_chunk($loop, 8);
                
                
                if($chunk){
                    
                    foreach($chunk as $l) {
                        
                    
                        
                        echo '<li>';
                        
                        foreach($l as $n) { ?>
                        
                        <a class="img" href="<?php echo get_the_permalink($n->ID); ?>" data-text="PROJEKT: Hanna Kuczma
FOTO:    -
KRAJ: Szwecja">
                            <?php echo get_the_post_thumbnail($n->ID); ?>
                            
                            
                        </a>
                                               
                            
                            
                    <?php    }
                        
                        echo '</li>';
                        
                    }
                }
                
                ?>

		
		</ul>
		
		
        <section class="dots" "="" style="opacity: 1; margin-left: -28px;">
        
        
    <?php
                $argsa=array(
                    'post_type' => 'gallery',
                    'posts_per_page' => -1
                );
                
                $loopa = get_posts($argsa);
                $chunka = array_chunk($loopa, 8);
                
                
                if($chunka){ 
                
                    $ssactive = 0; foreach( $chunka as $aa ): ?>
							
						<a href="#" class="dot <?php if ($ssactive == 0) echo ' current'; ?> "></a>
							
					<?php $ssactive++; endforeach;
                }
                
                ?>
        
            
            
        </section>
        
        
        <section class="nav">
            <a href="#" class="prev" style="margin-left: -64px;"></a>
            <a href="#" class="next" style="margin-left: 55px;"></a>
        </section>
        
        </section>
    </section>
</main>
       


<?php get_footer(); ?>