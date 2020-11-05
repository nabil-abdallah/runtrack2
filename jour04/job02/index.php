<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

	<form action="" method="get">
		Nom: <input type="text" name="Nom"><br>
		Prenom: <input type="text" name="prenom"><br>
		age: <input type="number" name="age"><br>
		E-mail: <input type="email" name="email"><br>
		Envoyer :<input type="submit" name="envoyer">
	</form>

<table>
    <thead>
        <tr>
            <th>Argument</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($_GET as $cle => $valeur): ?>
                <tr>
                    <td><?php echo $cle ?></td>
                    <td><?php echo $valeur ?></td>
                </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>





