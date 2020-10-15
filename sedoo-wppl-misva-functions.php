<?php


function sedoo_blocks_components_render_callback_misva( $block ) {
	
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	$templateURL = plugin_dir_path(__FILE__) . "template-parts/blocks/blockmisva/blockmisva.php";
    // include a template part from within the "template-parts/block" folder
    
	if( file_exists( $templateURL)) {
		include $templateURL;
    }
}

//////
// Fill products field on block with data's from API
/////
function sedoo_misva_fill_product_field( $field ) {
	$products_list_api = file_get_contents("https://services.aeris-data.fr/misva/data/v1_0/products");
	$products_list_in_array = json_decode($products_list_api, true);
	
	foreach($products_list_in_array as $product_in_array) {
		/// Proposé au format wind : Wind
		$products_ready_for_field[$product_in_array['id']] = $product_in_array['name'] ;
	}
	
	$field['choices'] = $products_ready_for_field;
	return $field;
}

add_filter('acf/load_field/name=produits_a_afficher', 'sedoo_misva_fill_product_field');