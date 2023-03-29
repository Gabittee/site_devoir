<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>index</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="ahh.css" type="text/css" />
</head>
<body>

<?php

include("navbar.html");



// Cherche les phrases d'accueil dans la BDD

try {
    $bdd = new PDO("mysql:host=localhost;dbname=emu;charset=utf8", "root", "");
} catch (Exception $e) {
    die("Erreur : ".$e -> getMessage());
}

$sql = 'SELECT * FROM citations';
$stmt = $bdd->prepare($sql);
$stmt->execute();

$donnees = $stmt;

$json = array();
while($row = $donnees->fetch()){

    $obj = new \stdClass();
    $obj->Citation = $row["Citation"];
    $json[] = $obj;
}

$num_citations = count($json);

?>



<!-- Affiche une phrase d'accueil au hasard -->

<div class="center">
  <p class="phrase">
    <?php
    
      echo $json[rand(0, $num_citations - 1)]->Citation;

    ?>
  </p>
</div>



<!-- Initialises les cards -->

<?php
  $games = array(
    array("name" => "NES", "icon" => "/emu/Icones/NES.png", "url" => "/emu/NES.php"),
    array("name" => "SNES", "icon" => "/emu/Icones/SNES.png", "url" => "/emu/SNES.php"),
    array("name" => "N64", "icon" => "/emu/Icones/N64.png", "url" => "/emu/N64.php"),
    array("name" => "Game Boy", "icon" => "/emu/Icones/GB.png", "url" => "/emu/GB.php"),
    array("name" => "GBA", "icon" => "/emu/Icones/GBA.png", "url" => "/emu/GBA.php"),
    array("name" => "DS", "icon" => "/emu/Icones/DS.png", "url" => "/emu/DS.php"),
    array("name" => "Mega Drive", "icon" => "/emu/Icones/MD.png", "url" => "/emu/MD.php"),
    array("name" => "PS1", "icon" => "/emu/Icones/PS1.png", "url" => "/emu/PS1.php"),
    array("name" => "Tous les jeux", "icon" => "/emu/Icones/stereotype-du-gamer-southpark.jpg", "url" => "/emu/tout_les_jeux.php")
  );
?>



<!-- Affiche les cards définis au dessus à l'aide d'une boucle -->

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    <?php $count = 0; ?>
    <?php foreach ($games as $game) { ?>
      <div class="col <?php if ($count == count($games) - 1) { echo 'mx-auto'; } ?>">
        <div class="card h-100">
          <a href="<?php echo $game["url"]; ?>">
            <img src="<?php echo $game["icon"]; ?>" class="card-img-top" >
            <div class="card-body">
              <p class="card-text"><?php echo $game["name"]; ?></p>
            </div>
          </a>
        </div>
      </div>
      <?php $count++; ?>
    <?php } ?>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
