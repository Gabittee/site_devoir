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
    array("name" => "Super Mario Kart", "icon" => "http://localhost/emu/cover/MKSNES.png", "ROM" => "http://localhost/emu/ROM/SNES/Super Mario Kart (USA).sfc"),
    array("name" => "Super Mario All-Stars", "icon" => "http://localhost/emu/cover/MarioAllStar.png", "ROM" => "http://localhost/emu/ROM/SNES/Super Mario All-Stars (Patch FR).sfc"),
    array("name" => "Donkey Kong Country", "icon" => "http://localhost/emu/cover/DKC1.png", "ROM" => "http://localhost/emu/ROM/SNES/Donkey Kong Country.smc"),
    array("name" => "Donkey Kong Country 2", "icon" => "http://localhost/emu/cover/DKC2.png", "ROM" => "http://localhost/emu/ROM/SNES/Donkey Kong Country 2 - Diddy's Kong Quest (USA) (En,Fr) (Rev A).sfc"),
    array("name" => "The Legend Of Zelda - A Link to the Past", "icon" => "http://localhost/emu/cover/Zelda3.png", "ROM" => "http://localhost/emu/ROM/SNES/The Legend of Zelda - A Link to the Past.smc"),
    array("name" => "Super Metroid", "icon" => "http://localhost/emu/cover/SuperMetroid.png", "ROM" => "http://localhost/emu/ROM/SNES/Super Metroid.smc"),
    array("name" => "Street Fighter 2 Turbo", "icon" => "http://localhost/emu/cover/StreetFighter2Turbo.png", "ROM" => "http://localhost/emu/ROM/SNES/Street Fighter 2 Turbo.smc")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
  <?php foreach ($games as $game) { ?>
    <div class="col">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $game['ROM']; ?>">
          <input type="hidden" name="Console" value="snes"> <!-- add a new hidden input field for snes variable -->
          <button type="submit" style="border: none; background: none; padding: 0;">
            <img src="<?php echo $game['icon']; ?>" class="card-img-top">
          </button>
        </form>
        <div class="card-body">
          <p class="card-text"><?php echo $game['name']; ?></p>
        </div>
      </div>
    </div>
  <?php } ?>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>
</html>
