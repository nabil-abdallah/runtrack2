	<?php
		session_start();
		
		
		if(!isset($_SESSION['prenom']))
			{	
				$_SESSION['prenom']=[];
			}
			if(isset($_POST['destroy'])&&$_POST['destroy']==true)
		{
			session_destroy();
			header('Location: index.php');
		}
		if (isset($_POST['prenom']))
		{	
			
			array_push($_SESSION['prenom'], $_POST['prenom']);	
		}	
			
			foreach ($_SESSION['prenom'] as $i) {
   			 echo "$i <br>";
			}
		?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>job 3</title>
</head>
<body>	
	<form method="POST" action="index.php" >
		<input type="text" name="prenom" placeholder="prenom" required>
		<input type="submit" name="envois" value="nouveau prenom">
	</form>
	<form method="POST" action="index.php" >
		<input type="submit" name="destroy" value="quitter">
	</form>
		
		
	
</body>
</html>
