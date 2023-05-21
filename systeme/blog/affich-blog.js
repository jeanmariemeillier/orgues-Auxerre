/*	
fichier affich-blog.js créé le 14/08/2011 par pascal rollin pour

l'association collectif 11880	

version 3.5.0 du 29/08/2021

getion d'un mini blog avec fonction ajax asynchrone

libre de droit et peut etre utilise découpé, recopier
si vous avez le temps, en sitant l"association collectif 11880  

modif importante au 25/02/2012
tratement des articles par un fichier php sur le serveur
modif importante au 12/08/2013
passage en mode asynchrone et separation en 2 fonctions

http://www.collectif11880.org/ */

function blog()
{
	var timer = setInterval("lireblog()",inter);
}  

function lireblog()
{
	ajaxSynchrone(urla);
}

function ajaxSynchrone(urla)
{
	var xhr = getXhr();
	
	xhr.onreadystatechange = function()
	{
		if(xhr.readyState == 4 && xhr.status == 200)// On ne fait quelque chose que si on a tout reçu et que le serveur est ok
		{
			reponse = xhr.responseText;	
		
			document.getElementById(elemid).innerHTML = reponse;   
		}
	}
	
	xhr.open("GET", urla, true);
	
	xhr.send(null);
}

function getXhr()
{
	var xhr = null;
	if(window.XMLHttpRequest)// Firefox et autres
		{ 
			xhr = new XMLHttpRequest(); 
			xhr.overrideMimeType('text/xml'); 
		}
	else if(window.ActiveXObject) // Internet Explorer 
		{
			try 
			{
				xhr = new ActiveXObject("Msxml2.XMLHTTP");
			} 
				catch (e)
			{
				xhr = new ActiveXObject("Microsoft.XMLHTTP");
			}
		}
	else
		{ 
			alert("Votre navigateur ne supporte pas les objets XMLHTTPRequest..."); 
			xhr = false; 
		} 
	return xhr;
}