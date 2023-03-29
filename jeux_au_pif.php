<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tout les jeux</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>

<?php 

include("navbar.html"); 

$Console = "%";  //pour prendre tout les jeux de la BDD

try {
  $bdd = new PDO("mysql:host=localhost;dbname=emu;charset=utf8", "root", "");
} catch (Exception $e) {
  die("Erreur : ".$e -> getMessage());
}

// Prends tout les jeux de la BDD puis en séléctionne un au hasard
$sql = "SELECT * FROM jeux WHERE Console LIKE '$Console' ORDER BY RAND() LIMIT 1";
$stmt = $bdd->prepare($sql);
$stmt->execute();


$donnees = $stmt;

$json = array();
while($row = $donnees->fetch()){

  $obj = new \stdClass();
  $obj->Name = $row["Name"];
  $obj->Console = $row["Console"];
  $obj->Icon = $row["Icon"];
  $obj->ROM = $row["ROM"];
  $obj->Description = $row["Description"];
  $json[] = $obj;
}

?>


<!-- Affiche le jeux qui a été pris au hasard -->
<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    <?php for($i = 0; $i < count($json); $i++) { ?>
      <div class="col">
        <div class="card h-100">
          <form method="post" action="emulateur.php">
            <input type="hidden" name="ROM" value="<?php echo $json[$i]->ROM; ?>">
            <input type="hidden" name="Description" value="<?php echo $json[$i]->Description; ?>">
            <input type="hidden" name="Console" value="<?php echo $json[$i]->$Console; ?>">
            <button type="submit" style="border: none; background: none; padding: 0;">
              <img src="<?php echo $json[$i]->Icon; ?>" class="card-img-top">
            </button>
          </form>
          <div class="card-body">
            <p class="card-text"><?php echo $json[$i]->Name ?></p>
          </div>
        </div>
      </div>
    <?php } ?>
    <div class="col">
      <button onclick="location.reload();" class="btn btn-primary">Recharger la page</button>
    </div>
  </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
