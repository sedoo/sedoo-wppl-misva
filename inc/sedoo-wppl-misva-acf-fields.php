<?php 
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e663e0f3f1c0',
	'title' => 'Block VUE JS',
	'fields' => array(
		array(
			'key' => 'field_5e663e6c5e3e8',
			'label' => 'Elements inclus',
			'name' => 'elements_inclus_misva',
			'type' => 'repeater',
			'instructions' => 'Insérer les lignes d\'inclusion des fichiers css ou js',
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
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5e763e455e7e9',
					'label' => 'Ligne de script',
					'name' => 'script_misva',
					'type' => 'text',
					'instructions' => 'En incluant les balises < style > ou < script >',
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
		)
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
			'key' => 'field_5f846de9e9d26',
			'label' => 'Attributs et valeurs',
			'name' => 'repeteur_attributs_misva',
			'type' => 'repeater',
			'instructions' => 'Insérez ici , sur chaque ligne les couples attributs et valeurs',
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
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5f846e18e9d27',
					'label' => 'Nom de l\'attribut',
					'name' => 'nom_de_lattribut',
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
			'instructions' => 'Insérez ici le nom de la balise de votre composant',
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