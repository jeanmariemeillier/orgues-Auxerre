<section id="titre_cath">
    <h1>test Les orgues de la Cathédrale d'Auxerre</h1>
</section>

<div id="accueil_cath">
   <section id="menu_cath">
        <ul id="nav_cath">
            <li class="indic30">
                <?php echo"<a href=\"".$liens["indic30"]["lien_pg"]."\">".$liens["indic30"]["trt_menu"]."</a>"; ?>
                <ul class="sous_menu_cath">
                    <!-- <li><a class="" href="index.php?pg=30">Chapitre 1</a></li> -->         
                    <?php echo"<li><a href=\"".$liens["indic30"]["sous_menu"]["href_1"]."\">".$liens["indic30"]["sous_menu"]["txt_lien_1"]."</a>"; ?>
                    <?php echo"<li><a href=\"".$liens["indic30"]["sous_menu"]["href_2"]."\">".$liens["indic30"]["sous_menu"]["txt_lien_2"]."</a>"; ?>
                    <!-- <li><a href="#"></a>Musique religieuse </li> -->
                    <?php echo"<li><a href=\"".$liens["indic30"]["sous_menu"]["href_3"]."\">".$liens["indic30"]["sous_menu"]["txt_lien_3"]."</a>"; ?>
                    <!-- <li><a href="#"></a>Note d’art et d’histoire </li> -->
                </ul>
            </li>
            <li class="trt_accueil indic31"><?php echo $liens["indic31"]["trt_menu"]; ?></li>
            <li class="indic32">
            <?php echo"<a href=\"".$liens["indic32"]["lien_pg"]."\">".$liens["indic32"]["trt_menu"]."</a>"; ?>
                <ul class="sous_menu_cath">
                    <?php echo"<li><a href=\"".$liens["indic32"]["sous_menu"]["href_1"]."\">".$liens["indic32"]["sous_menu"]["txt_lien_1"]."</a>"; ?>
                    <?php echo"<li><a href=\"".$liens["indic32"]["sous_menu"]["href_2"]."\">".$liens["indic32"]["sous_menu"]["txt_lien_2"]."</a>"; ?>
                    <!-- <li><a href="#">Chapitre 2</a></li>
                    <li><a href="#">Chapitre 3</a></li> -->
                </ul>
            </li>
            <li class="indic33">
            <?php echo"<a href=\"".$liens["indic33"]["lien_pg"]."\">".$liens["indic33"]["trt_menu"]."</a>"; ?>
                <ul class="sous_menu_cath">
                    <!-- <li><a class="" href="#">Chapitre 1</a></li> -->
                    <?php echo"<li><a href=\"".$liens["indic33"]["sous_menu"]["href_1"]."\">".$liens["indic33"]["sous_menu"]["txt_lien_1"]."</a>"; ?>
                    <?php echo"<li><a href=\"".$liens["indic33"]["sous_menu"]["href_2"]."\">".$liens["indic33"]["sous_menu"]["txt_lien_2"]."</a>"; ?>
                    <!-- // <li><a href="#">Chapitre 2</a></li> -->
                    <!-- // <li><a href="#">Chapitre 3</a></li> -->
                </ul>
            </li>
            <li class="indic34">
            <?php echo"<a href=\"".$liens["indic34"]["lien_pg"]."\">".$liens["indic34"]["trt_menu"]."</a>"; ?>
                <ul class="sous_menu_cath">
                    <?php echo"<li><a href=\"".$liens["indic34"]["sous_menu"]["href_1"]."\">".$liens["indic34"]["sous_menu"]["txt_lien_1"]."</a>"; ?>
                </ul>
            </li>
            <li class="indic35">
            <?php echo"<a href=\"".$liens["indic35"]["lien_pg"]."\">".$liens["indic35"]["trt_menu"]."</a>"; ?>
                <ul class="sous_menu_cath">
                    <?php echo"<li><a href=\"".$liens["indic35"]["sous_menu"]["href_1"]."\">".$liens["indic35"]["sous_menu"]["txt_lien_1"]."</a>"; ?>
                    <?php echo"<li><a href=\"".$liens["indic35"]["sous_menu"]["href_2"]."\">".$liens["indic35"]["sous_menu"]["txt_lien_2"]."</a>"; ?>
                    <?php echo"<li><a href=\"".$liens["indic35"]["sous_menu"]["href_3"]."\">".$liens["indic35"]["sous_menu"]["txt_lien_3"]."</a>"; ?>
                </ul>
            </li>
            <li class="trt_accueil indic36"><?php echo $liens["indic36"]["trt_menu"]; ?></li>
            <li class="indic37">
                <?php echo"<a href=\"".$liens["indic37"]["lien_pg"]."\">".$liens["indic37"]["trt_menu"]."</a>"; ?>
            </li>
            <li class="indic38">
                <?php echo"<a href=\"".$liens["indic38"]["lien_pg"]."\">".$liens["indic38"]["trt_menu"]."</a>"; ?>
                <ul class="sous_menu_cath">
                    <li><a href="#">Album 1</a></li>
                    <li><a href="#">Album 2</a></li>
                    <li><a href="#">Album 3</a></li>
                    <li><a href="#">Album 4</a></li>
                    <li><a href="#">Album 5</a></li>
                    <li><a href="#">Album 6</a></li>
                </ul>
            </li>
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

