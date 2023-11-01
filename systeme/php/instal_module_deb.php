<?php
    /* 
        fichier d'installation des différents modules dansle moteur du collectif
        création au 30/10/2023 
        installation du module Blog
        actuellement à la version 1.1.1 au 31/10/2023
        ajout du module Tooltip
        
        ! fonctionne uniquement sur la version 5 du moteur !
    */
    if ($liens["mod_blog"]) {
        $json = file_get_contents( $demar["dos_modul"]."blog/".$liens["js_blog"].".json");
        $mod_blog = json_decode($json, true);
    }
    if ($liens["mod_tooltip"]) {
        $json = file_get_contents($demar["dos_modul"]."tooltip/".$liens["js_tooltip"].".json");
        $mod_tooltip = json_decode($json, true);
    }
?>