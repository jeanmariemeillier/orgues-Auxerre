<?php
	session_start();
	$fam_prd = "26";
	$ref_prod ="26F0004A21";
	$table_prd ="codes_familles";
	/*$html = "";*/
	$rn="\r\n";
	$cmpt_session = 0;

	include_once ("base_donnees.php");

	if (isset($_POST['ges_fam'])){

		$nom_bdd = $_POST['ges_fam'];

		$ref_prod = $_POST['ges_prod'];

		$result_prd = $laison->query('SELECT * FROM '.$nom_bdd.'');

		while ($produit = $result_prd->fetch(PDO::FETCH_ASSOC))
		{ 
			if ($produit["ref_prd"] == $ref_prod)
			{
					$html = "<header>".$rn;
					$html .= "<input id=\"cod_prd\" type=\"hidden\" value=\"".$produit["ref_prd"]."\">".$rn;
					$html .= "<input id=\"cod_prd\" type=\"hidden\" value=\"".$fam_prd."\">".$rn;
					$html .= "<div class=\"cart-img\">".$rn;
					$html .=  "<img src=\"pages/images_produits/".$produit["img_prd"].".png"."\">".$rn;
					$html .= "</div>".$rn;
					$html .= "<div class=\"cart-title cnt\">".$rn;
					$html .=  "<h3>".$produit["tit_prd"]."</h3>".$rn;
					$html .= "<h4>prix : ".$produit["pxr_prd"]."</h4>".$rn;
					$html .= "<h4>référence : ".$produit["ref_prd"]."</h4>".$rn;
					if ($produit["stk_prd"]>1)
					{
						$html .="<p>".$rn;
						$html .="Quantité:".$rn;
						$html .="<select id=\"aff_nbr\">".$rn;
						for ($i=1; $i <=$produit["stk_prd"] ; $i++)
						{ 
							$html .="<option value=\"".$i."\">".$i."</option>".$rn;
						}
						$html .="</select>".$rn;
						$html .="</p>".$rn;
						
					}
					$html .= "</div>".$rn;
					$html .= "</header>".$rn;
					echo $html; 
			}
		}
	}
	if (isset($_POST['conf_fam']))
	{ // enrgistremnt dans la variable de session
/*
		$_SESSION['code']="";
		$_SESSION['bdd'] ="";
		*/
		$nom_bdd = $_POST['conf_fam'];

		$ref_prod = $_POST['conf_prod'];
	
		$result_prd = $laison->query('SELECT * FROM '.$nom_bdd.'');

		while ($produit = $result_prd->fetch(PDO::FETCH_ASSOC))
		{ 
			if ($produit["ref_prd"] == $ref_prod)
			{
				if (!isset($_SESSION['code']))
				{
					$_SESSION['code'] = $ref_prod;
					$_SESSION['bdd'] = $nom_bdd;


				}
				else
				{
					
					$_SESSION['code'] = $_SESSION['code']."//".$ref_prod;
					$_SESSION['bdd'] = $_SESSION['bdd']."//".$nom_bdd;
					
					$requete = "UPDATE $nom_bdd SET dispo_prd='1' WHERE ref_prd='$ref_prod'";

					$result_bdd = $laison->query($requete);

					$html = count(explode("//",$_SESSION['code']));	
					echo $html; 
				}
			}
		}
	}

	if (isset($_POST['verif_pan'])){ // verification dans la variable de session
		if (isset($_SESSION['code']))
		{	
			
			$html = count(explode("//",$_SESSION['code']));	

			echo $html; 

		}
	}
	
	$laison=NULL;
?>