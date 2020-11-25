<?php

	$connexion = mysqli_connect("localhost", "root", "", "jour08");

	$requete = "SELECT AVG(capacite) FROM salles";
	

	$query = mysqli_query($connexion, $requete);
	

	$resultat = mysqli_fetch_all($query);
	

	#var_dump($resultat);

	mysqli_close($connexion);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>

		<thead>
			<tr>
				
				<th>Moyenne</th>
				
			</tr>
			
		</thead>
		
		
		<tbody>
			<?php foreach ($resultat as $result): ?>
			<tr>
				<td><?php echo $result[0]?></td>
				
				
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>