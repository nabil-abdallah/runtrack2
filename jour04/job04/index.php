<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

    <form action="" method="post">
        Nom: <input type="text" name="nom"><br>
        Prenom: <input type="text" name="prenom"><br>
        Age: <input type="text" name="age"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" value="envoyer"/><br>
    
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
            foreach($_POST as $cle => $valeur): ?>
                <tr>
                    <td><?php echo $cle ?></td>
                    <td><?php echo $valeur ?></td>
                </tr>
        <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>