function nouveau_jeu()
{
	alert("Utilisez les derni�res versions de navigateur, Merci!")
}

// === Parameter ===
var	img_width	= 50	// Largeur image
var	img_height	= 50	// Hauteur image
var	champ_largeur	= 4	// Nombre d'images � l'horizontale
var	champ_hauteur	= 6	// Nombre d'images � la verticale
var	dummy	= "images/puzzle/vide.gif"	// Image Dummy
var	image	= "images/puzzle/Image"	// Segment Image (le num�ro et l'extension .jpg sont automatiquement ajout�s)

// === Variables ===
var	nombre_images	= champ_largeur * champ_hauteur
var	total	= champ_largeur * champ_hauteur
var	bas	= 0
var	page	= 0
var	colonnes	= 0
var	imagesourceinterne	= "ImageQ"
var	imagecibleinterne	= "ImageZ"

var	source	= new Array()
var	cible	= new Array()
var	note_bloc	= -1
var	note_champ	= -1
var	statutjeu	= 0

// === Pr�paratifs ===
if((champ_largeur + 6) * img_width < 600)
{
	bas	= total % 6
	if(bas <= 1)
		bas	+= 6
	total	-= bas
	page	= total / 6
	colonnes	= 3
}
else
{
	bas	= total % 4
	if(bas <= 1)
		bas	+= 4
	total	-= bas
	page	= total / 4
	colonnes	= 2
}

// Affichage dans la barre d'�tat
function affiche(nr, ciblechamp)
{
	if(statutjeu == 0)
		status	= ((ciblechamp ? cible[nr] : source[nr]) != -1) ? "Ce bloc peut �tre s�lectionn�." : "Le champ est vide."
	else
		status	= ((ciblechamp ? cible[nr] : source[nr]) == -1) ? "Ce champ peut-�tre s�lectionn�." : "Il y  d�j� un bloc ici."

}

// Effacer les informations de la barre d'�tat
function supprim()
{
	status	= ""
}

// V�rifier si l'image est termin�e
function fini()
{
	var	i
	for(i = 0; i < nombre_images; i++)
		if(cible[i] != i)
			return false

	return true
}

// Exploiter le clic sur l'image
function clic(nr, ciblechamp)
{
	// Pas encore d'image 
	if(statutjeu == 0)
	{
		if((ciblechamp ? cible[nr] : source[nr]) == -1)
		{
			alert("Il n'y a pas de bloc ici!")
			return
		}
		note_bloc	= nr
		note_champ	= ciblechamp
		statutjeu	= 1
		return
	}

	// Noter image source
	if(statutjeu == 1)
	{
		if((ciblechamp ? cible[nr] : source[nr]) != -1)
		{
			alert("Il y a d�j� un bloc ici!")
			return
		}

		if(ciblechamp)
		{
			cible[nr]	= note_champ ? cible[note_bloc] : source[note_bloc]
			document.images[imagecibleinterne + nr].src	= image + cible[nr] + ".jpg"
		}
		else
		{
			source[nr]	= note_champ ? cible[note_bloc] : source[note_bloc]
			document.images[imagesourceinterne + nr].src	= image + source[nr] + ".jpg"
		}

		if(note_champ)
			cible[note_bloc]	= -1
		else
			source[note_bloc]	= -1
		document.images[(note_champ ? imagecibleinterne : imagesourceinterne) + note_bloc].src	= dummy

		statutjeu	= 0

		if(fini())
			alert("Bravo ! Toutes nos f�licitations !")

		return
	}
}

// Afficher le plateau de jeu
function plateaujeu()
{
	// Ciblechamp (au milieu)
	function ciblechamp()
	{
		var	z	= ""
		var	i
		var	j
		var	nr

		z	+= "<TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"1\">\n"
		for(i = 0; i < champ_hauteur; i++)
		{
			z	+= "<TR ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">\n"
			for(j = 0; j < champ_largeur; j++)
			{
				nr	= champ_largeur * i + j
				z	+= "<TD><A HREF=\"javascript:clic(" + nr + ", true)\" onMouseOver=\"affiche(" + nr + ", true); return true\" onMouseOut=\"supprim()\"><IMG SRC=\"" + dummy + "\" WIDTH=\"" + img_width + "\" HEIGHT=\"" + img_height + "\" BORDER=\"1\" NAME=\"" + imagecibleinterne + nr + "\" ALT=\"\"></A></TD>\n"
			}
			z	+= "</TR>\n"
		}
		z	+= "</TABLE>"

		return z
	}

	// Champs sources (gauche, droite et bas)
	function selectchamp(nr)
	{
		var	i
		var	j
		var	offset	= 0
		var	nr

		z	= ""

		z	+= "<TABLE BORDER=\"0\" CELLSPACING=\"0\" CELLPADDING=\"4\">\n"

		if(nr == 1 || nr == 2)
		{
			offset	= (nr == 1) ? 0 : (colonnes * page)

			for(i = 0; i < page; i++)
			{
				z	+= "<TR ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">\n"
				for(j = 0; j < colonnes; j++)
				{
					nr	= offset + colonnes * i + j
					z	+= "<TD><A HREF=\"javascript:clic(" + nr + ", false)\" onMouseOver=\"affiche(" + nr + ", false); return true\" onMouseOut=\"supprim()\"><IMG SRC=\"" + image + String(source[nr]) + ".jpg\" WIDTH=\"" + img_width + "\" HEIGHT=\"" + img_height + "\" BORDER=\"1\" NAME=\"" + imagesourceinterne + nr + "\" ALT=\"\"></A></TD>\n"
				}
				z	+= "</TR>\n"
			}
		}
		else if(nr == 3)
		{
			offset	= 2 * colonnes * page

			z	+= "<TR ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">\n"
			for(i = 0; i < bas; i++)
			{
				nr	= offset + i
				z	+= "<TD><A HREF=\"javascript:clic(" + nr + ", false)\" onMouseOver=\"affiche(" + nr + ", false); return true\" onMouseOut=\"supprim()\"><IMG SRC=\"" + image + String(source[nr]) + ".jpg\" WIDTH=\"" + img_width + "\" HEIGHT=\"" + img_height + "\" BORDER=\"1\" NAME=\"" + imagesourceinterne + nr + "\" ALT=\"\"></A></TD>\n"
			}
			z	+= "</TR>\n"
		}

		z	+= "</TABLE>"

		return z
	}

	with(document)
	{
		writeln("<DIV ALIGN=\"CENTER\">")
		writeln("<TABLE BORDER=\"0\" CELLSPACING=\"1\" CELLPADDING=\"4\">")
		writeln("<TR ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">")
		writeln("<TD ROWSPAN=\"2\" WIDTH=\"30%\">" + selectchamp(1) + "</TD>")
		writeln("<TD WIDTH=\"40%\">" + ciblechamp() + "</TD>")
		writeln("<TD ROWSPAN=\"2\" WIDTH=\"30%\">" + selectchamp(2) + "</TD>")
		writeln("</TR>")
		writeln("<TR ALIGN=\"CENTER\" VALIGN=\"MIDDLE\">")
		writeln("<TD WIDTH=\"40%\">" + selectchamp(3) + "</TD>")
		writeln("</TR>")
		writeln("</TABLE>")
		writeln("</DIV>")
	}
}

// Noter et m�langer les blocs
function init()
{
	var	i

	statutjeu	= 0

	for(i = 0; i < nombre_images; i++)
	{
		source[i]	= i
		cible[i]	= -1
	}

	var	a
	var	b
	var	temp
	for(i = 0; i < 4 * nombre_images; i++)
	{
		a	= Math.floor(Math.random() * nombre_images)
		b	= Math.floor(Math.random() * nombre_images)
		temp	= source[a]
		source[a]	= source[b]
		source[b]	= temp
	}
}

// Position de d�part des blocs
function nouveau_jeu()
{
	var	i
	init()

	for(i = 0; i < nombre_images; i++)
	{
		document.images[imagesourceinterne + i].src	= (source[i] == -1) ? dummy : (image + source[i] + ".jpg")
		document.images[imagecibleinterne + i].src	= (cible[i] == -1) ? dummy : (image + cible[i] + ".jpg")
	}
}