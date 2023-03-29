<?php

try {
    $bdd = new PDO("mysql:host=localhost;dbname=emu;charset=utf8", "root", "");
} catch (Exception $e) {
    die("Erreur : ".$e -> getMessage());
}

// Traitement de la soumission du formulaire d'ajout de citation
if (isset($_POST['citation'])) {
    $citation = $_POST['citation'];
    $sql = "INSERT INTO citations (Citation) VALUES (:citation)";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':citation', $citation);
    $stmt->execute();
    echo "Citation insérée avec succès dans la base de données !";
}

// Traitement de la soumission du formulaire de suppression de citation
if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    $sql = "DELETE FROM citations WHERE ID = :id";
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "Citation supprimée avec succès de la base de données !";
}

// Récupération de toutes les citations depuis la base de données
$sql = 'SELECT ID, Citation FROM citations';
$stmt = $bdd->prepare($sql);
$stmt->execute();
$citations = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ajouter ou supprimer une citation</title>
</head>
<body>
    <h1>Ajouter une citation</h1>
    <form method="post">
        <label for="citation">Entrez votre citation :</label><br>
        <textarea name="citation" id="citation" rows="3"></textarea><br>
        <input type="submit" value="Ajouter la citation">
    </form>

    <h2>Liste des citations :</h2>
    <ul>
        <?php foreach ($citations as $citation) { ?>
            <li><?php echo $citation['Citation']; ?>
                <form method="post" style="display:inline-block">
                    <input type="hidden" name="delete_id" value="<?php echo $citation['ID']; ?>">
                    <input type="submit" value="Supprimer">
                </form>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
