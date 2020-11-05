<?php

	$i = 0 ;
	
	foreach ($_POST as $key => $value) 
	{
		$i++;
	}

	echo $i ;;
	
?>





<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="index.php" method="post">
		Nom: <input type="text" name="name"><br>
		Prenom: <input type="text" name="prenom"><br>
		Age: <input type="text" name="age"><br>
		E-mail: <input type="text" name="email"><br>
		<input type="submit" value="envoyer"/><br>
	
	</form>





</body>
</html>