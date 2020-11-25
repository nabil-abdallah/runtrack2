<?php

	$connexion = mysqli_connect("localhost", "root", "", "jour08");

	$requete = "SELECT * FROM etudiants WHERE naissance < CURRENT_DATE - INTERVAL '18' YEAR";
	

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
				<th>ID</th>
				<th>Prenom</th>
				<th>Nom</th>
				<th>Naissance</th>
				<th>Sexe</th>
				<th>Mail</th>
			</tr>
			
		</thead>
		
		
		<tbody>
			<?php foreach ($resultat as $result): ?>
			<tr>
				<td><?php echo $result[0]?></td>
				<td><?php echo $result[1]?></td>
				<td><?php echo $result[2]?></td>
				<td><?php echo $result[3]?></td>
				<td><?php echo $result[4]?></td>
				<td><?php echo $result[5]?></td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>