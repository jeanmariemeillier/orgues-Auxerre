<div id="accueil">
   <section>
      <article id="menu_accueil">
         <ul>
            <?php
            	for ($menu=10; $menu <=$liens["nbr_menu_acc"]; $menu++)
               { 
                 if ($liens["indic".$menu]["valid"]==1)
                  { 
                     echo "<li><a href=\"".$liens["indic".$menu]["lien_pg"]."\">".$liens["indic".$menu]["trt_menu"]."</a></li>";
                  }
                  elseif ($liens["indic".$menu]["valid"]==0)
                  {
                     echo"<li class=\"".$liens["indic".$menu]["lien_pg"]."\">".$liens["indic".$menu]["trt_menu"]."</li>";
                  }
               }
            ?>
         </ul>
      </article>
   </section>
   <section>
      <figure id="puzzle">
         <img src="images/orgue_puzzle_poster.jpg" alt="Puzzle unique de l'orgue de la cathédraled'Auxerre" title="Puzzle unique de l'orgue de la cathédrale d'Auxerre">
         <figcaption>Puzzle unique de l'orgue de la cathédrale d'Auxerre</figcaption>
      </figure>   
   </section>
   <section id="blog">
      <?php include($liens["dirlien"]."/textes_blog/actu_01.php");?>
   </section>
</div>