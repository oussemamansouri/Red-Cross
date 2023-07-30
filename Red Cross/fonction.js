function verif(forme1) {	
var log = forme1.log.value;

if ( log.length == 0 ){ alert("donner le mot de passe"); return false; }
if ( log != "issat123" ){ alert("mot de pass incorrecte!"); return false; }

}

function verif2(forme2){

if(forme2.nom.value ==""){ alert("Veuillez taper votre nom !"); return false;}
if(forme2.prenom.value ==""){ alert("Veuillez taper votre prenom !"); return false;}

var alt = document.forme2.email.value.indexOf('@') ;
var point = document.forme2.email.value.indexOf('.') ;
var ch = document.forme2.email.value ;
var longch = document.forme2.email.value.length ;
if(ch == "") { alert("Veuillez entrer votre adresse e-mail!"); return false;}
if(alt == -1) { alert("Adresse e-mail incorrecte!"); return false; }
if(point == -1) { alert("Adresse e-mail incorrecte!"); return false; }
if(  ((point-alt-1)==0) || (alt == 0) || (point < alt) || ((longch-point-1)<2) || ((longch-point-1)>3) ){ alert("Adresse e-mail incorrecte!"); return false; }

if(forme2.date.value ==""){alert("Veuillez entrer votre date de naissance!"); return false}
if(forme2.tel.value ==""){ alert("Veuillez taper votre nemuro!"); return false;}

var v = 1 ;
var taille =document.forme2.tel.value.length;
for(i=0;i<taille;++i)
{if(document.forme2.tel.value.charAt(i)<"0" || document.forme2.tel.value.charAt(i) >"9" || taille!=8){ v
= -1; alert("Le numéro de votre telephone est incorrect!"); return false; break;} }
if(v == -1) {alert("Le numéro de votre telephone est incorrect!"); return false; }

if(forme2.pays.value ==""){ alert("Veuillez taper votre pays !"); return false;}
if(forme2.pays.value.length <3 ){ alert("pays incorrecte!"); return false;}

if(forme2.Q1.value ==""){ alert("Veuillez taper votre reponse !"); return false;}
if(forme2.Q1.value.length <5 ){ alert("Veuillez taper votre reponse !"); return false;}

if(forme2.fb.value ==""){ alert("Veuillez taper votre lien facebook !"); return false;}
if(forme2.fb.value.length <10){ alert("lien facebook incorrecte!"); return false;}
}

function verif3(forme3){
if(forme3.nom.value ==""){ alert("Veuillez taper le nom !"); return false;}
}

function verif4(forme3){

if(forme3.supp.value ==""){ alert("Veuillez taper le numéro !"); return false;}

var v = 1 ;
var taille =document.forme3.supp.value.length;
for(i=0;i<taille;++i)
{if(document.forme3.supp.value.charAt(i)<"0" || document.forme3.supp.value.charAt(i) >"9" || taille!=8){ 
 alert("Le numéro de votre telephone est incorrect!"); return false; break;} }
}




function chaine(ch){
var v=1 ;
for(var i=0;i<ch.length;i++){
if( ch.charAt(i)<"a" || ch.charAt(i) >"z" || ch.charAt(i)<"A" || ch.charAt(i) >"Z"  ){ return v=-1 ; break;}
 }
return v ;
}

