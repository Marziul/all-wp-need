add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );
add_filter( 'ot_theme_mode', '__return_true' );

require get_template_directory() . '/lib/option-tree/ot-loader.php';

// Meta Box and Fields
require get_template_directory() . '/includes/meta-box.php';
