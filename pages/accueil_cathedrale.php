<section id="titre_cath">
    <h1><?php echo $affichtxt["tit_cath"]  ?></h1>
</section>
    <div id="accueil_cath">
        <section id="menu_cath">
            <ul id="nav_cath">
                <?php menu_aside($liens,2); ?>
            </ul>
        </section>
    <section id="milieu_cath">
        <div class="vue_slide">
            <!-- zone images -->
        </div>  
    </section>
    <section id="droit_cath">
        <?php include($liens["dirlien"]."/".$liens["dirtxt"]."/".$affichtxt["milieu_cath"].$lp); ?>
    </section>
</div>

