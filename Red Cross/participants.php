<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	table{  border-style: dashed; border-spacing: 5px; border: solid; align-self: center; width: 100px; color: white; margin-top: 80px;  height:45px;font-size: 25px; }	
th{ background-color: #1465AC ;    }
td{ background-color:#4B90CC  ; text-align: center;   }
caption{  font-size: 60px; padding: 5px;    }
	</style>
	<title>participants</title>
</head>
<body  style="  background-image: url('image/backm.jpg');  background-size: auto;  ">

<?php
mysql_connect("localhost","root","") or die("Impossible de se connecter");
mysql_select_db("base_crt") or die("pas possible de trouver la base");

$result = mysql_query("SELECT * FROM participants");
$nblignes = mysql_numrows($result);    
echo "<table><tr><th>Nom</th><th>Prenom</th><th>Email</th><th>Vanontaire</th><th>Date de naissance</th><th>Tel</th><th>Sexe</th><th>Pays</th><th>Section</th><th>Niveau</th><th>Que savez vous du croissant rougz ?</th><th>Actifs dans des autres clubs</th><th>Lien facebook</th></tr>\n";
for ($i=0;$i<$nblignes;$i=$i+1) {
	 $prod_nom =  mysql_result($result,$i,"nom");
	 $prod_pre = mysql_result($result,$i,"prenom");
     $prod_email= mysql_result($result,$i,"email");
$prod_val= mysql_result($result,$i,"valontaire");
$prod_date= mysql_result($result,$i,"date_de_naissance");
$prod_tel= mysql_result($result,$i,"tel");
$prod_sexe= mysql_result($result,$i,"sexe");
$prod_pays= mysql_result($result,$i,"pays");
$prod_section= mysql_result($result,$i,"section");
$prod_niveau= mysql_result($result,$i,"niveau");
$prod_savey= mysql_result($result,$i,"savey_vous");
$prod_actifs= mysql_result($result,$i,"actifs");
$prod_lien= mysql_result($result,$i,"lien_fb");

	 echo "<tr><td>$prod_nom</td><td>$prod_pre</td><td>$prod_email</td><td>$prod_val</td><td>$prod_date</td><td>$prod_tel</td><td>$prod_sexe</td><td>$prod_pays</td><td>$prod_section</td><td>$prod_niveau</td><td>$prod_savey</td><td>$prod_actifs</td><td>$prod_lien</td></tr>";
}
echo "<caption>Les participants</caption></table>";
mysql_close();
?>
</body>
</html>