<?php
			
			if(isset($_POST['destroy'])&&$_POST['destroy']=='reset')
			{	$_POST['reset']=null;
				unset($_COOKIE['nbvisites']);
			}
			if(!isset($_COOKIE['nbvisites']))
			{	
				setcookie('nbvisites', 1, 0);
			}
			else{
				$a=$_COOKIE['nbvisites']-1;

				setcookie('nbvisites', $a, 1);
				echo "il y a eu ".$_COOKIE['nbvisites']." visite";
			}

		?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>	
	<form method="POST" action="index.php">
		<input type="submit" name="reset" value="reset">
	</form>
</body>
</html>
