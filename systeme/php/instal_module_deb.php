<?php
    /* 
        fichier d'installation des différents modules dansle moteur du collectif
        création au 30/10/2023 
        installation du module Blog
        actuellement à la version 1.1.3 au 1/11/2023
        ajout du module Tooltip
        ajout du module principal Elements
        au 1/11/2023 rajout des modules principaux, Eléments et Auto-menu
        
        ! fonctionne uniquement sur la version 5 du moteur !
    */
    /* condition déclarant le module Blog, permttant d'aficher du texte et des images avec une animation */
    if ($liens["mod_blog"]) {
        $json = file_get_contents( $demar["dos_modul"]."blog/".$liens["js_blog"].".json");
        $mod_blog = json_decode($json, true);
    }
    /* condition  déclarant le module Tooltip pour afficher des infos-bulles dans un texte*/
    if ($liens["mod_tooltip"]) {
        $json = file_get_contents($demar["dos_modul"]."tooltip/".$liens["js_tooltip"].".json");
        $mod_tooltip = json_decode($json, true);
    }
          /*  condition déclarant le module Eléments avec le fichier list-elements.json, qui contient des données optionelles à afficher sur le site. entierement réecrit pour la version 5 */
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$demar["nom_elmemnt"].$jsn);
		$affichtxt = json_decode($lstelemt, true);
	}
    	/* condition déclarant le module Auto_menu, un générateur de menu */
	if ($liens["auto_menu"]){
        /* l'appel de la fonction dans <ul> avec  <?php Genenu($activ, $liens, $rn); entierement réecrit pour la version 5  */
         include ($chem_princ."/".$demar["dirphp"]."/".$demar["instl_automn"].$lp);
    }
	
?>