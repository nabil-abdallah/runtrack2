<?php

	$connexion = mysqli_connect("localhost", "root", "", "jour08");

	$requete = "SELECT nom, capacite FROM salles ORDER BY capacite DESC";
	

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
				<th>Nom</th>
				<th>Capacite</th>
				
			</tr>
			
		</thead>
		
		
		<tbody>
			<?php foreach ($resultat as $result): ?>
			<tr>
				<td><?php echo $result[0]?></td>
				<td><?php echo $result[1]?></td>
				
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>