<?php
/* 
* Template Name: Societa Affiliate
*/
?>
<?php get_header(); ?>
    
    <section class="header-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="col-sm-5">
                    <div class="breadcam">
                        <?php if(function_exists('bcn_display'))
                            {
                                bcn_display();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="page-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="taxonomy-all-item-area">
                          
                            <?php
                            $terms = apply_filters( 'taxonomy-images-get-terms', 'associated_club', array(
                                'taxonomy' => 'associated_club',
                                ) );
                                if ( ! empty( $terms ) ) {
                                print "\n" . '<ul>';
                                foreach( (array) $terms as $term ) {
                                    print "\n" . '<li>';
                                    print "\n\t" . '<a href="' . esc_url( get_term_link( $term, $term->name ) ) . '">' . wp_get_attachment_image( $term->image_id, 'detail' ) . '</a>';
                                    print "\n\t" . '<span class="category-name"><a href="' . esc_url( get_term_link( $term, $term->taxonomy ) ) . '">' . esc_html( $term->name ) . '</span>';
                                    print "\n" . '</li>';
                                }
                                print "\n" . '</ul>';
                            }
                            ?>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
