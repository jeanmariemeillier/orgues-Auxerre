<?php
 /* 
  génération  automatique  de code javacript pour les Module pour les sites du collectif 11880
  Date de création: 21/02/2012  
  actuelement à la version 3.0.0 au 30/10/2023
  version 3 comprend:
        transformer le code pour tous les modules
        ajout des variable json pour le sous module defil blog
        ajout d'une variable pour le chmin générique du blog
  */
  
    /* condition pour lancer l'intallation du module blog   */
    $ling_jouvr_js = "\n<script type=\"text/javascript\">";
if ($liens["mod_blog"]) {
    $doss_ssdos= $demar["dos_modul"]."blog/";
    echo $ling_jouvr_js.$rn;
    if ($mod_blog["slide_blog"]){ 
        echo "var urla = \"".$doss_ssdos.$mod_blog["url_serv"]."\";".$rn; /* chemin et nom du fichier appeler par l'ajax*/
        echo "var inter = ".$mod_blog["tmp_blog"].";".$rn; /* temps en milisecnde entre chaque appel*/
        echo "var elemid = \"".$mod_blog["id_blog"]."\";".$rn; /* nom de l'id du div ou s'affiche le blog */
        if($fich_blog == $mod_blog["fich_blog"])  echo "blog();".$rn;/* lancement de la fonction uniquement sur la page */
    }
    /* variable json pas encore crées */
    if ($mod_blog["defil_blog"]){ 
       echo" var debuttop =".$mod_blog["debut_top"].";".$rn; //position de début du top de ID
       echo" var tempo = ".$mod_blog["tempo"].";".$rn; //temps de la boucle settimeout
       echo"var fintop = ".$mod_blog["fin_top"].";".$rn; // position mini du top de ID
       echo "var pasdefil =".$mod_blog["pas_defil"].";".$rn;  //pas de decopmte dela valeur de top du ID
    }
    echo "</SCRIPT>".$rn;
    echo "<script src=\"".$doss_ssdos.$mod_blog["fich_js"]."\"></script>";
}
/* déclaration des variable pour le module Tooltip */
if ($liens["mod_tooltip"]) {
    echo $ling_jouvr_js.$rn;
    echo"const chm_json_tooltip = \"../modules/tooltip/".$mod_tooltip["lexique_tooltip"].".json\";".$rn;
    echo"const iconcroix_tooltip = \"../modules/tooltip/icon/book.svg\";".$rn;
    echo"const class_tooltip = \"tooltip\";".$rn;
    echo "</SCRIPT>".$rn;
    echo "<script src=\"".$doss_ssdos.$mod_blog["fich_js"]."\"></script>";
}
?>