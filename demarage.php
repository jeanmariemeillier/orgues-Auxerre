<?php
    /* 
    date de création 26/11/2023 à la version 1.0.1
    fichier demare.php regroupe toutes les varaibles et condition pour lancer un site géré par le collectif!
    permet la modification pour tous les sites du collectif

    texte à inserer dans le fichier index des sites du collectif
    */
    $json = file_get_contents("donnees_site.json");
    $demar = json_decode($json, true);
    $chem_princ =$demar["chem"]; 
    
    include($chem_princ."/php/index_deb.php");
    if ($liens["panier"])  session_start();// corection au 26/11/2023 du bug panier possible
?>