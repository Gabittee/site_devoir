<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=emu;charset=utf8", "root", "");
} catch (Exception $e) {
    die("Erreur : ".$e -> getMessage());
}

// Traitement de la soumission du formulaire d'ajout de jeu
if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['icon']) && isset($_POST['rom']) && isset($_POST['console'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];
    $rom = $_POST['rom'];
    $console = $_POST['console'];
    $sql = "INSERT INTO jeux (Name, Description, Icon, ROM, Console) VALUES (:name, :description, :icon, :rom, :console)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':icon', $icon);
    $stmt->bindParam(':rom', $rom);
    $stmt->bindParam(':console', $console);
    $stmt->execute();
    echo "Jeu ajouté avec succès à la base de données !";
}

// Traitement de la soumission du formulaire de suppression de jeu
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM jeux WHERE ID = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "Jeu supprimé avec succès de la base de données !";
}

// Récupération de tous les jeux depuis la base de données
$sql = 'SELECT ID, Name, Description, Icon, ROM, Console FROM jeux';
$stmt = $bdd->prepare($sql);
$stmt->execute();
$jeux = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter, modifier ou supprimer un jeu</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
    <h1>Ajouter un jeu</h1>

    <form method="post">

        <label for="name">Nom du jeu :</label><br>
        <input type="text" name="name" id="name"><br>

        <label for="description">Description :</label><br>
        <textarea name="description" id="description" rows="3"></textarea><br>

        <label for="icon">Chemin de l'icône :</label><br>
        <input type="text" name="icon" id="icon" value="http://localhost/emu/cover/"><br>

        <label for="rom">Chemin de la ROM :</label><br>
        <input type="text" name="rom" id="rom" value="http://localhost/emu/ROM/"><br>

        <label for="console">Console :</label><br>
        <input type="text" name="console" id="console"><br>

        <input type="submit" value="Ajouter le jeu">

    </form>


    <h2>Liste des jeux :</h2>
    <table>
        <thead>
            <tr>
                <th>Nom du jeu</th>
                <th>Description</th>
                <th>Icône</th>
                <th>ROM</th>
                <th>Console</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($jeux as $jeu) { ?>
                <tr>
                    <td>
                        <form method="post">
                            <input type="hidden" name="update_id" value="<?php echo $jeu['ID']; ?>">
                            <input type="text" name="name" value="<?php echo $jeu['Name']; ?>">
                    </td>
                    <td><textarea name="description" rows="3"><?php echo $jeu['Description']; ?></textarea></td>
                    <td><input type="text" name="icon" value="<?php echo $jeu['Icon']; ?>"></td>
                    <td><input type="text" name="rom" value="<?php echo $jeu['ROM']; ?>"></td>
                    <td><input type="text" name="console" value="<?php echo $jeu['Console']; ?>"></td>
                    <td>
                        <input type="submit" value="Modifier">
                        </form>
                        <form method="post" style="display:inline-block">
                            <input type="hidden" name="delete_id" value="<?php echo $jeu['ID']; ?>">
                            <input type="submit" value="Supprimer">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>