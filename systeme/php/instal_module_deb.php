<?php
    /* 
        fichier d'installation des différents modules dansle moteur du collectif
        création au 30/10/2023 version 1.1.0
        fonctionne uniquement sur la version 5 du moteur
    */
    if ($liens["mod_blog"]) {
        $json = file_get_contents("modules/blog/module_blog.json");
        $mod_blog = json_decode($json, true);
    }
?>