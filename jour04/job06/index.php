<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="index.php" method="get">
		<label>Numero :</label><input type="text" name="numero"><br>
		
		<input type="submit" value="envoyer"/><br>
		
	</form>





</body>
</html>


<?php

	$i = 0 ;
	
	if ($_GET == true) 
	{
		if ($_GET["numero"] % 2 == 0) 
		{
			echo "C'est un numero pair";
		}
		else
		{
			echo "C'est un numero impair";
		}
	}
	
?>