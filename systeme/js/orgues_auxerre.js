var bebuttop =230;//position de début du top de ID
var tempo = 150; //temps de la boucle settimeout
var fintop = -350; // position mini du top de ID
var pasdefil =1;  //pas de decopmte dela valeur de top du ID
var tp = debuttop; 
function Defilement(){ 
    var tm = setTimeout("Defilement()",tempo); 
    var defil = document.getElementById('ActuTexte');
    defil.style.top = tp +"px";
    tp = tp -1;
    if(tp==fintop){
        tp = bebuttop;
    } 
}
