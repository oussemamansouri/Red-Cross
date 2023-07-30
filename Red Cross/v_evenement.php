<!DOCTYPE html>
<html>
<head>
	<style type="text/css">

	table{  border-style: dashed; border-spacing: 5px; border: solid; align-self: center; width: 40%; color: white; margin:10% 30% 90% 30%  ;  height:45px;font-size: 25px; }	
th{ background-color: #1465AC ;    }
td{ background-color:#4B90CC ;  text-align: center;  }
caption{  font-size: 60px; padding: 5px;    }
	</style>
	<title>membres</title>
</head>
<body  style="  background-image: url('image/backm.jpg'); background-size: cover; background-repeat: no-repeat;  ">

<?php

mysql_connect("localhost","root","") or die("Impossible de se connecter");
mysql_select_db("base_crt") or die("pas possible de trouver la base");

$result = mysql_query("SELECT * FROM evenement");
$nblignes = mysql_numrows($result);    
echo "<table><tr><th>sujet</th><th>date</th></tr>\n";
for ($i=0;$i<$nblignes;$i=$i+1) {
	 $prod_nom =  mysql_result($result,$i,"nom");
	 $prod_pre = mysql_result($result,$i,"date");



	 echo "<tr><td>$prod_nom</td><td>$prod_pre</td><td>$prod_email</td><td>$prod_tel</td><td>$prod_date</td><td>$prod_niveau</td></tr>";
}
echo "<caption>Les evenement</caption></table>";



?>
</body>
</html>