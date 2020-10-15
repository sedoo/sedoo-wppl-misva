<?php 
if( function_exists('acf_add_local_field_group') ):

	////////
	// Fields for component post type
	///////
	acf_add_local_field_group(array(
		'key' => 'group_5e663e0f3f1c0',
		'title' => 'Block VUE JS',
		'fields' => array(
			array(
				'key' => 'field_5e663e6c5e3e8',
				'label' => 'Elements inclus',
				'name' => 'elements_inclus_misva',
				'type' => 'repeater',
				'instructions' => 'Insérer les lignes d\'inclusion des fichiers css, js, typographiques',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '+ Ligne de script',
				'sub_fields' => array(
					array(
						'key' => 'field_5e763e455e7e9',
						'label' => 'Ligne de script',
						'name' => 'script_misva',
						'type' => 'text',
						'instructions' => 'Les lignes complètes, incluant les balises < link > ou < script >',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_5f846de9e9d26',
				'label' => 'Attributs et valeurs du viewer',
				'name' => 'repeteur_attributs_misva',
				'type' => 'repeater',
				'instructions' => 'Insérez ici, sur chaque ligne les couples attributs et valeurs',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'collapsed' => '',
				'min' => 0,
				'max' => 0,
				'layout' => 'table',
				'button_label' => '+ Attribut / Valeur',
				'sub_fields' => array(
					array(
						'key' => 'field_5f846e18e9d27',
						'label' => 'Nom de l\'attribut',
						'name' => 'nom_de_lattribut',
						'type' => 'text',
						'instructions' => 'Ex : Service, ..',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '40',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
					array(
						'key' => 'field_5f846e2fe9d28',
						'label' => 'Valeur de l\'attribut',
						'name' => 'valeur_de_lattribut',
						'type' => 'text',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => 0,
						'wrapper' => array(
							'width' => '40',
							'class' => '',
							'id' => '',
						),
						'default_value' => '',
						'placeholder' => '',
						'prepend' => '',
						'append' => '',
						'maxlength' => '',
					),
				),
			),
			array(
				'key' => 'field_5f856353381bc',
				'label' => 'Nom de la balise',
				'name' => 'nom_de_la_balise',
				'type' => 'text',
				'instructions' => 'Insérez ici le nom de la balise du viewer',
				'required' => 1,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'maxlength' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'misva_viewers',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

	////////
	// Fields for the block
	///////
	acf_add_local_field_group(array(
		'key' => 'group_5f846daf38429',
		'title' => 'Champs pour bloc misva',
		'fields' => array(
			array(
				'key' => 'field_5f846db6e9d25',
				'label' => 'Type de viewer à charger',
				'name' => 'type_de_viewer_a_charger',
				'type' => 'relationship',
				'instructions' => 'Incluez un viewer spécifique aux données qui seront traitées et affichées.',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'post_type' => array(
					0 => 'misva_viewers',
				),
				'taxonomy' => '',
				'filters' => '',
				'elements' => '',
				'min' => '0',
				'max' => '1',
				'return_format' => 'id',
			),
			array(
				'key' => 'field_5f858dbfb1014',
				'label' => 'Produits à afficher',
				'name' => 'produits_a_afficher',
				'type' => 'select',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
				),
				'default_value' => array(
				),
				'allow_null' => 0,
				'multiple' => 1,
				'ui' => 1,
				'ajax' => 0,
				'return_format' => 'value',
				'placeholder' => '',
				// 'type' => 'relationship',
				// 'instructions' => 'Plusieurs produits sont sélectionnables.',
				// 'required' => 0,
				// 'conditional_logic' => 0,
				// 'wrapper' => array(
				// 	'width' => '',
				// 	'class' => '',
				// 	'id' => '',
				// ),
				// 'post_type' => array(
				// 	0 => 'sedoo_misva_products',
				// ),
				// 'taxonomy' => '',
				// 'filters' => array(
				// 	0 => 'search',
				// ),
				// 'elements' => '',
				// 'min' => '',
				// 'max' => '',
				// 'return_format' => 'id',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/sedoo-blocks-misva',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
    
endif;



?>