<?php

////////
// Je crée ma classe pour l'alignement wordpress etc
////////
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

////////
// Je recupuère le viewer utilisé dans le bloc
////////
$viewer_misva = get_field('type_de_viewer_a_charger');

////////
// Je récupère les lignes de scripts du viewer et les affiche
///////
if( have_rows('elements_inclus_misva', $viewer_misva[0]) ):
    while( have_rows('elements_inclus_misva', $viewer_misva[0]) ): the_row(); 
        echo the_sub_field('script_misva', $viewer_misva[0]);
    endwhile; 
endif;

////////
// J'afiche la section composant Misva avec les attributs qui vont bien
///////
$string_construct_attributes;
if( have_rows('repeteur_attributs_misva') ):
    while( have_rows('repeteur_attributs_misva') ): the_row(); 
        $string_construct_attributes .= get_sub_field('nom_de_lattribut');
        $string_construct_attributes .= '="'.get_sub_field('valeur_de_lattribut').'"';
    endwhile; 
endif;


////////
// Je stock le nom de la balise
///////
$nom_balise = get_field('nom_de_la_balise');
?>

<section class="sedoo-misva-component <?php echo $className;?>">
    <?php echo '<'.$nom_balise.' '.$string_construct_attributes.'> </'.$nom_balise.'>'; ?>
</section>

