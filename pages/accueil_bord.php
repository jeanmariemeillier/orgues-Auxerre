<div id="main_tab">
  <?php
      include "damare_bord.php";
  ?>
  <div class="b-example-divider"></div>
  <div id="favoris">
    <h2 class="cnt">favoris sites</h2>   
    <ul>
     <?php 
      $repjsprd = $chem_princ."/donnees/liens_tab_bord.json";
      $jsonprd = file_get_contents($repjsprd);// variable defini dans boutique ex
      $lien_brd = json_decode($jsonprd, true);
      for ($catl=1; $catl <=$lien_brd["nbr_lien"]; $catl++){
       echo "<li>".$rn." <button>".$rn.$lien_brd["grp".$catl]["trt"].$rn."</button>".$rn;
       echo "<ul class=\"btn-toggle-nav list-unstyled fw-normal pb-1\">".$rn;

       for ($mnprd=1; $mnprd <=$lien_brd["grp".$catl]["nbr_indc"]; $mnprd++){
          echo "<li>".$rn."<a href=\"https://".$lien_brd["grp".$catl]["adresse_".$mnprd]."\" target=\"_blank\" class=\"ink-dark rounded\">".$lien_brd["grp".$catl]["nom_".$mnprd]."</a>".$rn."</li>".$rn;
        }
      echo"</ul>";
      }
     ?> 
    </ul>
  </div>

  <div class="b-example-divider"></div>

  <div id="agenda">
    <h2 class="cnt">section vide</h2> 

  </div>
</div>