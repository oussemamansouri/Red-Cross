<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="fonction.js"></script>
	<style type="text/css">
		h1{  font-size: 200px; font-family: monospace;    }
     *{ margin: 0; padding: 0 ;    }	
      .form-box{ width: 1000px; background: rgba(0,0,0,0.8); margin: 3% auto ; padding: 50px 50px ;color: #fff; box-shadow: 0 0 20px 2px rgba(0,0,0,0.5) ; }
.lien:hover{ background-color: #6FBFDE;  border-style: inset;    }
.lien{  font-size: 20px; border-radius: 20px ;   padding: 3px; border-color: #6FBFDE;  border-style: solid; width: 63% ; margin: 10px 0 0 0px; border-style: outset; background-color: rgba(0,0,0,0.3); font-size: 33px;  }
div {  margin: 55px;      }

	</style>
	<meta charset="utf-8">
	<title>momber</title>
</head>
<body  style="  background-image: url('image/backm.jpg'); background-size: auto; background-repeat: no-repeat;  "  >

	<h1 align="CENTER" style="color: white;" > Bienvenue </h1>


<div align="CENTER"  >
	

<form  name='f2' method="POST" action="participants.php">
<input class="lien" type="submit" name="b2" value="voir les participants " ><b>
</form>
<br>

<form  name='f3' method="POST" action="v_membres.php">
<input class="lien" type="submit" name="b3" value="voir les membres de la club " >
</form>


<form  name='f4' method="POST" action="v_evenement.php">
<input class="lien" type="submit" name="b3" value="voir les evenements " >
</form>

</div>



</body>
</html>