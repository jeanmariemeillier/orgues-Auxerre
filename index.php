<?php 
  /* 
  site  orgues auxerre version 2 création 07/05/2023
  ce site est la proprièté de Jean-Marie Meillieur
  ce site est réalisé avec l'association collectif 11880
  */
  // session_start();// bug possible
  $json = file_get_contents("donnees_site.json");
  $demar = json_decode($json, true);
  $chem_princ =$demar["chem"]; 
  $jsonsite = $demar["f_json"]; 
  include($chem_princ."/php/index_deb.php");

   /* BDD pour plus  tard */
  //include_once ($chem_princ."/php/base_donnees.php"); */
  
  // $result_site = $laison->query('SELECT * FROM mise_jour_site');
  // $misjoursite = $result_site->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="collectif 11880">
    <title><?php echo $demar["trt_head"]; ?></title>
    <link href="systeme/css/normalize.css" rel="stylesheet">
    <link href="systeme/css/bootstrap-icons.css" rel="stylesheet">
    <link href="systeme/css/orgues_auxerre.css" rel="stylesheet">
    <link href="systeme/css/entrer_securiser.css" rel="stylesheet">
    <link href="systeme/css/tab-bord.css" rel="stylesheet">
    <script src="systeme/js/jquery-3.6.4.min.js"></script>
    <script src="systeme/js/orgues_auxerre.js"></script>
    <script src="systeme/js/puzzle.js"></script>
     <!-- <link href="systeme/css/blog.css" rel="stylesheet"> -->
   
    <!-- <script src="systeme/js/jquery-3.6.4.min.js"></script> -->
    <?php  
          /* corection d'un bug rajout d'une condition pour afficher le blog ou non
          modif du 21/05/2023 */
          if ($liens["mod_blog"]) {
            echo "<!-- installation du blog -->";
            include($chem_princ."/blog/installblog.php");
          } 
          /* fin de modif */
          /* test lance fonction defilement en javascript */
          //echo"<script>Defilement()</script>";
          echo $rn."</head>".$rn."<body onload=\"Defilement()\">".$rn;
          echo "\t<nav id=\"navbar\">".$rn; 
          include $chem_princ."/php/affiche_menu.php"; 
        echo"</nav>".$rn;
        if ($aside) {
          echo"<main id=\"main\">".$rn;
          echo"<aside id=\"aside\">".$rn; 
          include $affasi; 
          echo "</aside>".$rn;
        }
           else  echo"<main id=\"main_total\">".$rn; 
          include $affpg; 
          // $laison=NULL;
      ?>
    </main>
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
  
   <script>Defilement()</script>
</html>