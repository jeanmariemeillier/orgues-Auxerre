<?php
	/*
		Fichier de gestion pour la navigation des sites conçu ou gérer par l'association collectif 11880 créée le 18/02/2012  
		
		Actuellement à la version 5.1.3 au 1/11/2023.

	 	Ce fichier est libre d'utilisation en citant l'association: www.collectif11880.org.

		modif au 30/10/2023 par pascal:
			correction bug sur la variable $pg_court : elle renseignais le chemin et la page encours au lieu que de la page!
			ajout d'une variable $pg_court contenant le nom de la page courante pour faire fonctionner les modules
			récuperation d'une condition de la version 4.20.2 pour lancer l'installation du module blog à réecrire pour la version 5 et accecible pour tous les modules
			corction d'un bug vesrsion 2:
			oubli de déclarer la variable $v_tbrd à false par défaut. elle renseige de l'activation ou non du module tabbord
		modif au 1/11/2023 par pascal:
			déplace les déclaration des modules soit principaux, soit optionel dans le fichier instal_module_deb.php
			mise à jour des commentaires
	 	Nouvelle version 5: 
			la nouvelle version permet d'intégrer le mode front-end et back-end avec la gestion des liens du menu par le javascript.
			 la gestion des liens du menu de la version 4 fonctionnant grace au php devient une option definie dans le fichier json : donnees_site.json à la racine du site.
			supression de toutes données en dur, elles sont définie dans le fichier json donnees_site.json
					
		Si vous vouyez un bug ou une amélioration contactez le collectif sur infos@collectif11880.com, on sitera votre nom, merci!
	*/
	$rn = "\r\n";
	$lp = ".php";
	$lh = ".html";
	$lxt = ".txt";
	$jsn = ".json"; // nouvelle variable pour extention json V5
	$v_tbrd = false; // bug version 5 variable definisant si le tabbord est actvé ou non
	if ($demar["tabbord"]) 	include ($demar["fich_instal"]); 
	else  $jsonsite = $demar["f_json"];
	$json = file_get_contents($chem_princ."/".$demar["dirdonne"]."/".$jsonsite.$jsn);
	$liens = json_decode($json, true);
	$dirlien = $liens["dirlien"]."/";
	$affpg =  $dirlien.$liens["index"].$lp; 
	$pg_court = $dirlien.$liens["index"]; 
	$activ = $liens["defactiv"]; 
	if ($liens["aside"]) $affasi =  $dirlien.$liens["fich_aside"].$lp; 
	/* modification pour la version 5 rajout d'une condition optionnelle pour l'utilisation des requetes en get */
	if($demar["liens_get"]){
		if(isset($_GET['pg'])) {
			$pgmain = $_GET['pg'];
			$affpg =  $dirlien.$liens["indic".$pgmain]["lrm"].$lp;
			$pg_court =  $liens["indic".$pgmain]["lrm"];
			if(isset($_GET['act'])) $activ = $_GET['act'];
			else  $activ = $_GET['pg']; 
			/* modification du 08/10/2023 pour les orgues d'auxerre  condition géstion des liens de type inside*/
			if (isset($_GET['sm'])) {
				$sous_menu = $_GET['sm'];
				$affpg = $dirlien.$liens["indic".$pgmain]["sous_menu"]["lrm_".$sous_menu].$lp;
				$pg_court = $liens["indic".$pgmain]["sous_menu"]["lrm_".$sous_menu];
			}
			if (isset($_GET['asi'])) $affasi =  $dirlien.$liens["indic".$_GET['pg']]["arm"].$lp;
			/*condition pour que variable 'aupg' reference le nom d'une table en BDD le 23/09/2023*/
			if(isset($_GET['aupg'])) $autopg = $_GET['aupg'];
		}
	}
	/* version 5 fichier qui gére l'intallation des modules principaux et optionel*/
	include ($chem_princ."/php/instal_module_deb.php");
		

?>	