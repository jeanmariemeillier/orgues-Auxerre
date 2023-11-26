<?php 
  /* 
    site  les orgues auxerre version 2 création 07/05/2023
    ce site est la proprièté de Jean-Marie Meillier et il est réalisé avec l'association collectif 11880
    modification au 26/11/2023 :
     réation d'un module php "demarage pour regrouper toutes les commandes au démarage du fichier index!
  */
   include "demarage.php";
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="collectif 11880">
    <title><?php echo $demar["trt_head"]; ?></title>
    <link href="systeme/css/master" rel="stylesheet">
    <script src="systeme/js/jquery-3.6.4.min.js"></script>
    <script src="systeme/js/puzzle.js"></script>
    <?php  include("modules/instal_modules.php"); ?>
  </head>
  <body>
    <nav id="navbar">
      <?php include $chem_princ."/php/affiche_menu.php"; ?>
    </nav>
    <?php 
        if ($liens["aside"]) {
          echo"<main id=\"main\">".$rn;
          echo"<aside id=\"aside\">".$rn; 
          include $affasi; 
          echo "</aside>".$rn;
        }
           else  echo"<main id=\"main_total\">".$rn; 
          include $affpg; 
          echo "</main>";
    ?>
    <footer>
       <p>
        <?php
            echo " Copyright &copy; ".$demar["copy_dte"]." ".$demar["edition"]." /  Site réalisé par  <a href=\"".$demar["lien_realis"]."\" target=\"_blank\">".$demar["realis"]."</a>  /  Version ". $demar["version"]." au ".  $demar["date"];
            if ($v_tbrd) {
            echo " / <a href=\"".$liens["indic20"]["lien_pg"]."\">?</a> ";
          }
        ?>
      </p>
    </footer>
  </body>
  <?php include("modules/lance_modules.php"); ?>
</html>