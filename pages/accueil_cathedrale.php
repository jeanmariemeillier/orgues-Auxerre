<section id="titre_cath">
    <h1>test Les orgues de la Cathédrale d'Auxerre</h1>
</section>

<div id="accueil_cath">
   <section id="menu_cath">
        <ul id="nav_cath">
        <?php
            $tab="\t\t\t\t";
            for ($menasd=$liens["indssmenu_2"]; $menasd <=$liens["indssmenu_2"]+ $liens["nbr_ssmenu"] ; $menasd++) { 
                echo"\t<li class=\"indic".$menasd;
                if ($liens["indic".$menasd]["fn_tit_menu"]) {
                    echo " trt_accueil\">".$liens["indic".$menasd]["trt_menu"];
                }
                else {
                    echo"\">".$rn;
                
                    echo $tab."<a href=\"".$liens["indic".$menasd]["lien_pg"]."\">".$liens["indic".$menasd]["trt_menu"]."</a>".$rn;
                    if ($liens["indic".$menasd]["nbr_lien_ssm"]!=0) {
                        echo $tab."<ul class=\"sous_menu_cath\">".$rn;
                        for ($ssm=1; $ssm <=$liens["indic".$menasd]["nbr_lien_ssm"] ; $ssm++) { 
                            echo $tab."\t<li><a href=\"".$liens["indic".$menasd]["sous_menu"]["href_".$ssm]."\">".$liens["indic".$menasd]["sous_menu"]["txt_lien_".$ssm]."</a>";
                            echo "</li>".$rn;
                        }
                        echo $tab."</ul>".$rn;
                    }
                }
                echo "\t\t\t</li>".$rn;
            }
        ?>
            
        </ul>
    </section>
    <section id="milieu_cath">
      <div class="vue_slide">

      </div>  
      <!-- <div class="container">
            <div class="slide">


            </div>
        </div>     -->
      
    </section>
    <section id="droit_cath">
        <?php include($liens["dirlien"]."/".$liens["dirtxt"]."/".$affichtxt["milieu_cath"].$lp); ?>
    </section>
</div>

