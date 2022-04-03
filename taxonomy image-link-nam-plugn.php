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