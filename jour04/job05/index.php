<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form action="index.php" method="post">
		<label>Username</label><input type="text" name="username"><br>
		<label>Password:</label> <input type="text" name="password"><br>
		<input type="submit" value="envoyer"/><br>
		
	</form>





</body>
</html>


<?php

	$i = 0 ;
	
	if ($_POST == true) 
	{
		if ($_POST["username"] == "John" && $_POST["password"] == "Rambo") 
		{
			echo "C'est pas ma guerre";
		}
		else
		{
			echo "Votre pire cauchemar";
		}
	}
	
?>