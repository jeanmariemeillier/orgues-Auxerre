
<section id="gestion_prd">
    <h2 id="titre-prd">Gestion du tableau de bord</h2>
 

<table id="tab_tab_bord">
	<thead>
		<tr>
        	<th>Changer de mot de passe</th>
        	<th>Fichier par défaut</th>
            <th>Mise à jour du site</th>
            <th>Durée du cookie</th>

    	</tr>
		</thead>
	<tbody>
    	<tr class="tr-nom">
        	<td>Entrer le mot de passe actuel</td>
        	<td>fichier actuel : <?php echo $liens["fich_blog"];?> </td>
            <td>Version</td>
            <td>Durée actuel : <?php echo ($tempo_cle /3600)." heures"?></td>
        </tr>
        <tr>
        <td><input name="nom_trav" type="text" placeholder="Nom" id="nom_trav" /></td>
        <td> choisir un nouveau ficheir dans la liste</td>
        <td><input type="text" id="version" value="<?php /* echo $misjoursite["version"]; */ ?>" minlength="4" maxlength="15"/></td>
        <td>
            <select id="" name="">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
            </select>
        </td>
        </tr>
    	<tr class="">
        	<td>entrer le nouveau mot de passe</td>
        	<td> </td>
        	<td>Date</td>
        	<td><input type="button" value="validation" id="envoi" /></td>

            
        </tr>
        <tr>
        <td><input name="nom_trav" type="text" placeholder="Nom" id="nom_trav" /></td>
        <td><input type="button" value="validation" id="" /></td>
        <td> <input type="text" id="formdat" value="<?php /* echo $misjoursite["date"]; */ ?>" minlength="4" maxlength="15"/></td>
        <td></td>
        </tr>
        <tr class="tr-action">
        	<td><input type="button" name="val_trav" value="engeristrement"></td>
        	<td> Nouveau fichier : </td>
        	<td><input type="button" value="validation" id="envoi" /></td>
            <td>nouveau temps : </td>
        </tr>
        <tr>
    </tbody>

</table>


    <h2 id="titre-prd">modification du blog</h2>
<article id="modif_blog">


    <!-- <label for="story">Tell us your story:</label> -->
    <textarea id="text_blog" name="story" rows="10" cols="150">
    <?php include($liens["dirlien"]."/".$liens["dirtxt"]."/info_accueil.php");?>
    </textarea>

</article>



</section>