<?php
	/*
	création fichier tabbord_deb.php pour l'association collectif 11880
	ne peut fonctionner sans son moteur "index_deb.php"
	permet l'acces serurisé d'un site avec mot de passe code en MD5

	actuellement à la version version 2.1.1 au 20/04/2023

	modifications importante par Fateh!
	ajout d'un test si la variable quit existe et est égale à 1 permet de quiter le mode tabbord et suprimer le cookie
	*/
	$tempo_cle = 86400; /* modif de la valeur: nouvelle valeur= 24h */

		if (isset($_POST['acces']) && md5($_POST['acces']) == $demar["pas_bord"]){
			$jsonsite = "tab_bord";
			setcookie("tabbord", "ok", time()+ $tempo_cle,"/"); // modif crée une variable pour la durée du cookie
			$v_tbrd = false;
		}
		if(isset($_COOKIE["tabbord"])){
			if(isset($_GET['quit']) && $_GET['quit'] == 1){ //rajout condition le 20/04/2023
				setcookie("tabbord", "", time()-3600,"/");
				// $jsonsite = $demar["f_json"]; 
				header("Location: index.php"); // a cause de la variable 'quit' toujour en mémoire
			}
			$jsonsite = $demar["fich_tabbord"];// modif varible dans json donnees site
			$v_tbrd = false;
		}
?>