<?php

	$connexion = mysqli_connect("localhost", "root", "", "jour08");

	$requete = "SELECT * FROM salles INNER JOIN etage ON salles.id_etage = etage.id
";
	

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
				<th>Etage</th>
			</tr>
			
		</thead>
		
		
		<tbody>
			<?php foreach ($resultat as $result): ?>
			<tr>
				<td><?php echo $result[1]?></td>
				<td><?php echo $result[5]?></td>
				
				
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>