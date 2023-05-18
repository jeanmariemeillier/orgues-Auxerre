<?php
	/*
		Date de création: 18/02/2012 version 1.1.8

		fichier de gestion pour la navigation des sites conçu ou gérer par l'association collectif 11880 

	 	version 4.13.1 au 20/04/2023.

	 	Ce fichier est libre d'utilisation en sitant l'association: www.collectif11880.org.

	 	DERNIERE MODIFS IMPORTANTES

	 	!* rajout d'une varaible $fich_blog  contennat le nom de la page active pour l'option blog auto *!

	 	rajout d'un fichier json à la racine du site pour activer des modules particuliers comme un tableau de bord ou 
		l'utilisation de différantes langues. 
		
		rajout de la variable $autopg par defaut 

	 	le 04/08/2022 modif sur la variable $active: elle est egale à l'indice du lien dans le menu supression du tableau
	 	dernière modif le 12/03/2023: 
	 	
		rajout d'une condition si un Get'act' est pesent pour consever l'active sur une page à affichage automatique.
	 	modif crée une variable  $tempo_cle pour la durée du cookie 

	 	NOTE:
	 	si vous vouyez un bug ou une amélioration contactez le collectif, on sitera votre nom, merci!
	*/
	
	/* déclaration des variables pour le site*/
	$rn = "\r\n";
	$lp = ".php";
	$lh = ".html";
	$lxt = ".txt";
	$activ = "1";
	$tempo_cle = 86400; /* modif de la valeur: nouvelle valeur= 24h */
	$aside = false;
	$v_tbrd = true;
	if ($demar["tabbord"]) {

		include ("tabbord_deb.php"); // nouveau sous fichier
	}
	$json = file_get_contents($chem_princ."/donnees/".$jsonsite.".json");
	$liens = json_decode($json, true);
	$dirlien = $liens["dirlien"]."/";
	$fich_blog = $liens["index"]; // nouvelle varaible lance le blog sur une page unique
	$affpg =  $dirlien.$liens["index"].$lp;
	$autopg =  "pg_tt"; // modif supression de l'aside page accueil en version test
	if ($liens["aside"]){
		$affasi =  $dirlien.$liens["fich_aside"].$lp; // corection bug 24/01/2022 
		$aside = true;
	}
	if(isset($_GET['pg'])) {
		$affpg =  $dirlien.$liens["indic".$_GET['pg']]["lrm"].$lp;
		$fich_blog = $liens["indic".$_GET['pg']]["lrm"];
		/*modif : variable act */
		if(isset($_GET['act'])) $activ = $_GET['act'];
		else  $activ = $_GET['pg']; 
		/* fin mofif*/	
		if (isset($_GET['asi'])) {
			$affasi =  $dirlien.$liens["indic".$_GET['pg']]["arm"].$lp;
			$aside = true;
		}
	}
	 /*  fichier list-elements.json. contient tous les nons des éléments à afficher sur la site 	 */
	if($liens["list"]){
		$lstelemt = file_get_contents($chem_princ."/donnees/list-elements.json");
		$affichtxt = json_decode($lstelemt, true);
	}
	/*recupere le nom de la page active dans un sous menu / si la variable 'aupg' existe 
	la modif depuis aupg c'est une reference soit json soit BDD	*/
	if(isset($_GET['aupg'])){
		$autopg = $_GET['aupg'];
	}
	/* générateur de menu: appel de la fonction dans <ul> avec  <?php Genenu($activ, $liens, $rn);  */
	if ($liens["auto_menu"]) {
		include ($chem_princ."/php/menu_deb.php");
	}
?>	