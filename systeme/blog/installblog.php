<?php
 /* 
  blog automatique du collectif 11880
  Date de création: 21/02/2012  
  version 1.5.1 au 4/09/2021

  manque une condition si mod_blog egale false
 */

    echo "<script src=\"".$chem_princ."/blog/affich-blog.js\"></script>".$rn;
    
    echo "\n\n<script type=\"text/javascript\">".$rn;
  
    echo "var urla = \"".$chem_princ."/blog/servblog.php\";".$rn; /* chemin et nom du fichier appeler par l'ajax*/
 
    echo "var inter = ".$liens["tmp_blog"].";".$rn; /* temps en milisecnde entre chaque appel*/
  
    echo "var elemid = \"".$liens["id_blog"]."\";".$rn; /* nom de l'id du div ou s'affiche le blog */
  
    if($fich_blog == $liens["fich_blog"])  echo "blog();".$rn;/* lancement de la fonction uniquement sur la page */
  
    echo "</SCRIPT>".$rn;
?>