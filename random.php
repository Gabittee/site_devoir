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
<?php
  $games = array(
    array("name" => "Super Mario World", "icon" => "http://localhost/emu/cover/MarioWorld.png", "ROM" => "http://localhost/emu/ROM/SNES/Super Mario World.sfc"),
    array("name" => "Super Metroid", "icon" => "http://localhost/emu/cover/SuperMetroid.png", "ROM" => "http://localhost/emu/ROM/SNES/Super Metroid.smc"),
    array("name" => "Street Fighter 2 Turbo", "icon" => "http://localhost/emu/cover/StreetFighter2Turbo.png", "ROM" => "http://localhost/emu/ROM/SNES/Street Fighter 2 Turbo.smc")
  );
  // Obtenir un index aléatoire du tableau
  $randomIndex = array_rand($games);
  // Récupérer la carte correspondante
  $game = $games[$randomIndex];
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    <?php
      // Sélectionne une carte aléatoire
      $randomIndex = array_rand($games);
      $randomGame = $games[$randomIndex];
    ?>
    <div class="col col-6">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $randomGame['ROM']; ?>">
          <input type="hidden" name="Console" value="snes">
          <button type="submit" style="border: none; background: none; padding: 0;">
            <img src="<?php echo $randomGame['icon']; ?>" class="card-img-top">
          </button>
        </form>
        <div class="card-body">
          <p class="card-text"><?php echo $randomGame['name']; ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="text-center my-3">
    <button class="btn btn-primary" onclick="location.reload()">Recharger la page</button>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>