<!DOCTYPE html>
<html>
<head>
	<title>job3</title>
</head>
<body>
	<<?php 
	$nom='Abdallah';
	$age='22';
	$prenom='Nabil';
	$taille='1.74';
	$marseille='true';



	?>
	<table>
		<thead>
			<tr>
				<th>Type</th>
				<th>Nom</th>
				<th>valeur</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					string
				</td>
				<td>$nom</td>
				<td>
					<?php 
					echo $nom;

					 ?>
				</td>
			</tr>
			<tr>
				<td>
					string
				</td>
				<td>$prenom</td>
				<td>
					<?php 
					echo $prenom;

					 ?>
				</td>
			</tr>
			<tr>
				<td>
					int
				</td>
				<td>
					$age
				</td>
				<td>
					<?php 
					echo $age; ?>
				</td>
			</tr>
			<tr>
				<td>
					float
				</td>
				<td>
					$taille
				</td>
				<td>
					<?php 
					echo $taille;?>
				</td>

			</tr>
			<tr>
				<td>
					ville
				</td>
				<td>
					$marseille
				</td>
				<td>
					<<?php 

					echo $marseille ; ?>
				</td>
			</tr>

			
		</tbody>
		
	</table>
	
</body>
</html>