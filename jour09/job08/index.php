<?php

	$connexion = mysqli_connect("localhost", "root", "", "jour08");

	$requete = "SELECT SUM(capacite) AS 'capacite_totale' FROM salles";
	

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
				<th>Capacite Totale</th>
				
			</tr>
			
		</thead>
		
		
		<tbody>
			<?php

				foreach ($resultat as $key => $value) 
				{
					echo "<tr>";
					foreach ($value as $id => $value) 
					{
						echo $value;
					}
					echo "</tr>";
				}
				?>
				
			
		</tbody>
	</table>

</body>
</html>