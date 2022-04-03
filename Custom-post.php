function  features_tab_section(){
    // Custom Post Type Labels     
    $labels = array(
        'name'               => _x( 'Banner Images', 'post type general name' ),
        'singular_name'      => _x( 'Banner Image', 'post type singular name' ),
        'add_new'            => _x( 'Add new Images', 'Images' ),
        'add_new_item'       => __( 'Add new Images' ),
        'edit_item'          => __( 'Edit Image' ),
        'new_item'           => __( 'New Image' ),
        'all_items'          => __( 'All Images' ),
        'view_item'          => __( 'View Image' ),
        'search_items'       => __( 'Search Images' ),
        'not_found'          => __( 'No Tab found' ),
        'not_found_in_trash' => __( 'No Tab found in trash' ),
        'parent_item_colon'  => __( 'Banner Images' ),
        'menu_name'          => __( 'Banner Images' )
    );
   
    // Custom Post Type Supports 
    $supports = array('title', 'editor', 'thumbnail');
   
    // Custom Post Type Arguments 
    $args = array(
        'labels'             => $labels,
        'hierarchical'       => false,
        'description'        => '',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => false,
        'show_in_admin_bar'  => true,
        'exclude_from_search'=> true,
        'query_var'          => true,
        'can_export'         => true,
        'rewrite'              => array("slug" => "features-tab"), // Permalinks format
        'has_archive'        => true,
        //'menu_position'      => 5,
        'supports'           => $supports,
        'capability_type'    => 'post',
    );
   
    register_post_type( 'banner-image', $args );

}
add_action( 'init', 'features_tab_section' );