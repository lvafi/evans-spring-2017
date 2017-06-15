<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
function register_staff_type_taxonomy() {
  $name_up_plur = 'Staff Types';
  $name_up_sing = 'Staff Type';
  $name_low_plur = 'staff types';
  $name_low_sing = 'staff type';
  $name_low_reg = 'stafftype';


	$labels = array(
		'name'                       => $name_up_plur,
		'singular_name'              => $name_up_sing,
		'menu_name'                  => $name_up_sing,
		'all_items'                  => 'All ' . $name_up_plur,
		'parent_item'                => 'Parent ' . $name_up_sing,
		'parent_item_colon'          => 'Parent ' . $name_up_sing . ':',
		'new_item_name'              => 'New Product Type Name',
		'add_new_item'               => 'Add New Product Type',
		'edit_item'                  => 'Edit Product Type',
		'update_item'                => 'Update Product Type',
		'view_item'                  => 'View Product Type',
		'separate_items_with_commas' => 'Separate product types with commas',
		'add_or_remove_items'        => 'Add or remove product types',
		'choose_from_most_used'      => 'Choose from the most used',
		'popular_items'              => 'Popular Product Types',
		'search_items'               => 'Search Product Types',
		'not_found'                  => 'Not Found',
		'no_terms'                   => 'No product types',
		'items_list'                 => 'Product Types list',
		'items_list_navigation'      => 'Product Types list navigation',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( $name_low_reg, array( $name_low_reg ), $args );

}
add_action( 'init', 'register_staff_type_taxonomy', 0 );