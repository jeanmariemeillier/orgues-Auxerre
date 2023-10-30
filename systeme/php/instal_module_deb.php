<?php
    /* 
    fichier d'installation du module blog en phase alpha à la version 1.0.1
    sera modifier pour integrer tous les autres modules et fonctionner sur la version 5 du moteur
    */
    if ($liens["mod_blog"]) {
        $json = file_get_contents("modules/blog/module_blog.json");
        $mod_blog = json_decode($json, true);
    }
?>