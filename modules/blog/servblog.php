<?php 
	/*
		blog automatique du collectif 11880

		Date de création: 25/02/2012 

		version 1.5.0 au 29/08/2021

		modif au 7 mai 2012 rajout variable $adr_cpt pour l'adresse du compteur

	 */
	
	$lien = "../../pages/textes_blog/"; // repertoire contennat les fichier textes en fonctionde la langue
	
	$adr_cpt ="bin/cpblog.txt"; // fichier contennant le numero du fichier actuel
	
	$fd = fopen($adr_cpt, "r");
	
	$contenu = trim(fgets( $fd,255));//nettoyage devant derriere
	
	fclose($fd);
	
    $repet = opendir($lien);	 
	
	$tabo = 1;
	
  	$taimg[] = array();
	
    while ($fichier = readdir($repet)) // recupere tous les noms de fichiers dans le repertoire courant
     {	
		if ($fichier !="." and $fichier !="..")
		 {
		   $taimg[$tabo] = trim($fichier);  
		
		   $tabo ++;
		 }
     } 
    closedir($repet); 
	
	$emplce = $lien.trim($taimg[$contenu]); 
	
	include($emplce); /* ecrit sur le fichier , en fait c'est le retour de l'ajax */
	
	if ($contenu<=count($taimg)-2)
	{
		$contenu = $contenu +1; 
	}
	else
	{
		$contenu =1;
	}
		
	$fd = fopen($adr_cpt, "w");
	fputs($fd,$contenu);
	fclose($fd);
?>