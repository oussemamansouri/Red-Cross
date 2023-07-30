<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		h1{  text-align: center;  }

	</style>
	<title>insecription</title>
</head>
<body>


<?php

mysql_connect("localhost","root","") or die ("Impossible de se connecter");
mysql_select_db("base_crt") or die("Impossible de trouver la base");





$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$valon = $_POST['valon'];
$date = $_POST["date"];
$tel = $_POST['tel'];
$sexe = $_POST['sexe'];
$pays = $_POST['pays'];
$section = $_POST['section'];
$niveau = $_POST['niveau'];
$Q1 = $_POST['Q1'];
$actif= $_POST['actif'];
$fb = $_POST['fb'];



$query = "INSERT INTO participants VALUES ('$nom','$prenom','$email','$valon','$date',$tel,'$sexe','$pays','$section',$niveau,'$Q1','$actif','$fb')";
$result=mysql_query($query);
mysql_close();

echo("<h1>Merci pour votre domande</h1>");

?>




</body>
</html>