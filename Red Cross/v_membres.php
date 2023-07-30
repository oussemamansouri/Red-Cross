<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	table{  border-style: dashed; border-spacing: 5px; border: solid; align-self: center; width: 40%; color: white; margin:10% 20% 90% 20% ;  height:45px;font-size: 25px; }	
th{ background-color: #1465AC ;     }
td{ background-color:#4B90CC ;  text-align: center;  }
caption{  font-size: 60px; padding: 5px;    }
	</style>
	<title>membres</title>
</head>
<body  style="  background-image: url('image/backm.jpg'); background-size: cover; background-repeat: no-repeat;  ">


<?php

mysql_connect("localhost","root","") or die("Impossible de se connecter");
mysql_select_db("base_crt") or die("pas possible de trouver la base");

$result = mysql_query("SELECT * FROM membres");
$nblignes = mysql_numrows($result);    
echo "<table><tr><th>Nom</th><th>Prenom</th><th>Email</th><th>Tel</th><th>Date de naissance</th><th>Niveau</th></tr>\n";
for ($i=0;$i<$nblignes;$i=$i+1) {
	 $prod_nom =  mysql_result($result,$i,"nom");
	 $prod_pre = mysql_result($result,$i,"prenom");
     $prod_email= mysql_result($result,$i,"email");
$prod_val= mysql_result($result,$i,"tel");
$prod_date= mysql_result($result,$i,"date_de_naissance");
$prod_tel= mysql_result($result,$i,"tel");
$prod_niveau= mysql_result($result,$i,"niveau");


	 echo "<tr><td>$prod_nom</td><td>$prod_pre</td><td>$prod_email</td><td>$prod_tel</td><td>$prod_date</td><td>$prod_niveau</td></tr>";
}
echo "<caption>Les membres</caption>  </table>";



?>
</body>
</html>