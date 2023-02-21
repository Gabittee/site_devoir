<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap 5 Card Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css">
</head>
<body>



<?php include("navbar.html"); ?>
<link rel="stylesheet" href="ahh.css" type="text/css" />

<!-- Phrase d'accueil -->
<div class="center">
  <p class="phrase">
    <?php
      $phrase_accueil = array(
        "N'oubliez pas de prendre une douche de temps en temps.",
        "Si Sonic court à la vitesse du son, il peut sûrement courir plus vite qu'un grille-pain.",
        "Non, ce n'est pas un site pour jouer à Minecraft gratuitement.",
        "Le plus grand trésor de la vie est l'amitié, ou bien 100 000€ en cash.",
        "La vitesse de la lumière est de très beaucoup rapide par heures.",
        "Non, ce n'est pas un site pour engager un menuisier.",
        "Non, ce n'est pas un site pour commander un vol France-Congo",
        "Je vends ma table pas chère, contactez-moi si vous êtes intéressé.",
        "Je n'ai plus d'idée de citations à mettre ici. Je vais en faire générer par ChatGPT.",
        "Comment Laurent Ruquier retire-t-il son pot de fleurs ? À la main !"
      );
      $index = array_rand($phrase_accueil);
      echo $phrase_accueil[$index];
    ?>
  </p>
</div>



<?php
  $games = array(
    array("name" => "NES", "icon" => "http://localhost/emu/Icones/NES.png", "url" => "http://localhost/emu/NES.php"),
    array("name" => "SNES", "icon" => "http://localhost/emu/Icones/SNES.png", "url" => "http://localhost/emu/SNES.php"),
    array("name" => "N64", "icon" => "http://localhost/emu/Icones/N64.png", "url" => "http://localhost/emu/N64.php"),
    array("name" => "GBA", "icon" => "http://localhost/emu/Icones/GBA.png", "url" => "http://localhost/emu/GBA.php"),
    array("name" => "Mega Drive", "icon" => "http://localhost/emu/Icones/MD.png", "url" => "http://localhost/emu/MD.php")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    <?php foreach ($games as $game) { ?>
      <div class="col">
        <div class="card h-100">
          <a href="<?php echo $game["url"]; ?>">
            <img src="<?php echo $game["icon"]; ?>" class="card-img-top" >
            <div class="card-body">
              <p class="card-text"><?php echo $game["name"]; ?></p>
            </div>
          </a>
        </div>
      </div>
    <?php } ?>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>