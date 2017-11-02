<?php

// Register the custom post type.
function register_example_cpt() {

    $labels = array(
        'name'               => __('Example custom post type', 'sage'),
        'singular_name'      => __('Example custom post type', 'sage'),
        'add_new'            => __('Add New Example custom post type', 'sage'),
        'add_new_item'       => __('Add New Example custom post type', 'sage'),
        'edit_item'          => __('Edit Example custom post type', 'sage'),
        'new_item'           => __('New Example custom post type', 'sage'),
        'view_item'          => __('View Example custom post type', 'sage'),
        'search_items'       => __('Search Example custom post type', 'sage'),
        'not_found'          => __('No Example custom posts type found', 'sage'),
        'not_found_in_trash' => __('No Example custom posts types found in Trash', 'sage'),
        'parent_item_colon'  => __('Parent Example custom post type:', 'sage'),
        'menu_name'          => __('Example CPT', 'sage'),
    );

    $args = array(
      'labels'              => $labels,
      'hierarchical'        => false,
      'description'         => 'description',
      'taxonomies'          => array(),
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_admin_bar'   => false,
      'menu_position'       => null,
      'menu_icon'           => null,
      'show_in_nav_menus'   => false,
      'publicly_queryable'  => true,
      'exclude_from_search' => true,
      'has_archive'         => true,
      'query_var'           => true,
      'can_export'          => true,
      'rewrite'             => true,
      'capability_type'     => 'post',
      'supports'            => array('title', 'thumbnail', 'editor')
    );

    register_post_type('my-custom-post-type', $args );
}
add_action('init', 'register_example_cpt');

// Register the taxonomy.
function taxonomy_example_cpt_category()
{

  $labels = array(
    'name'                  => __('Categories', 'sage'),
    'singular_name'         => __('Category', 'sage'),
    'search_items'          => __('Search Categories', 'sage'),
    'popular_items'         => __('Popular Categories', 'sage'),
    'all_items'             => __('All Categories', 'sage'),
    'parent_item'           => __('Parent Category', 'sage'),
    'parent_item_colon'     => __('Parent Category', 'sage'),
    'edit_item'             => __('Edit Category', 'sage'),
    'update_item'           => __('Update Category', 'sage'),
    'add_new_item'          => __('Add New Category', 'sage'),
    'new_item_name'         => __('New Category Name', 'sage'),
    'add_or_remove_items'   => __('Add or remove Categories', 'sage'),
    'choose_from_most_used' => __('Choose from most used Categories', 'sage'),
    'menu_name'             => __('Categories', 'sage')
  );

  $args = array(
    'labels'            => $labels,
    'public'            => true,
    'show_in_nav_menus' => true,
    'show_admin_column' => true,
    'hierarchical'      => true,
    'show_tagcloud'     => true,
    'show_ui'           => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'example-cpt-category'),
    'query_var'         => true
    // 'capabilities'   => ''
  );

  register_taxonomy('example-cpt-category', array('my-custom-post-type'), $args);
}
add_action('init', 'taxonomy_example_cpt_category');

// Add metabox
function example_cpt_meta() {

  global $post;
  $custom = get_post_custom($post->ID);

  $_example_meta_1 = '';
  if (isset($custom["_example_meta_1"][0])) {
    $_example_meta_1 = $custom["_example_meta_1"][0];
  }

?>
    <p>
      <strong>Example meta box input</strong><br/>
      <label class="screen-reader-text" for="_example_meta_1">Example meta 1</label>
      <input class="widefat" type="text" name="_example_meta_1" id="_example_meta_1" value="<?php echo $_example_meta_1; ?>">
    </p>
<?php

}

function example_cpt_metabox() {
    add_meta_box('example_cpt_meta', 'Example metabox title', 'example_cpt_meta', 'my-custom-post-type', 'normal', 'low');
}
add_action('admin_init', 'example_cpt_metabox');

// Save metabox
function save_example_cpt_meta($post_id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) {
        return $post_id;
    }

    if (isset($_POST["_example_meta_1"])) {
        update_post_meta($post_id, "_example_meta_1", $_POST["_example_meta_1"]);
    }
}
add_action('save_post', 'save_example_cpt_meta');
