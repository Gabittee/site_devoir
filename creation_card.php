<?php


try {
    $bdd = new PDO("mysql:host=localhost;dbname=emu;charset=utf8", "root", "");
} catch (Exception $e) {
    die("Erreur : ".$e -> getMessage());
}


$sql = "SELECT * FROM jeux WHERE Console like '$Console'"; // $Console sera définie dans la page ou ce code sera inclus (exemple si le code est inclus dans NES.php alors $Console = nes).
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


<!-- Boucle pour afficher toutes les cards des jeux de la console choisi -->

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
  <?php for($i = 0; $i < count($json); $i++) { ?>
    <div class="col">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $json[$i]->ROM; ?>">
          <input type="hidden" name="Description" value="<?php echo $json[$i]->Description; ?>">
          <input type="hidden" name="Console" value="<?php echo $Console; ?>">
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
  </div>
</div>
