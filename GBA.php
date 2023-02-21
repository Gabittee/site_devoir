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
    array("name" => "Sonic Advance", "icon" => "http://localhost/emu/cover/SonicAdv1.png", "ROM" => "http://localhost/emu/ROM/GBA/Sonic Advance.gba"),
    array("name" => "Sonic Advance 2", "icon" => "http://localhost/emu/cover/SonicAdv1.png", "ROM" => "http://localhost/emu/ROM/GBA/Sonic Advance 2.gba"),
    array("name" => "Sonic Advance 3", "icon" => "http://localhost/emu/cover/SonicAdv1.png", "ROM" => "http://localhost/emu/ROM/GBA/Sonic Advance 2.gba"),
    array("name" => "Fire Emblem", "icon" => "http://localhost/emu/cover/FireEmblem7.png", "ROM" => "http://localhost/emu/ROM/GBA/Fire Emblem.gba"),
    array("name" => "Wario Ware", "icon" => "http://localhost/emu/cover/WarioWare.png", "ROM" => "http://localhost/emu/ROM/GBA/1005 - Wario Ware Inc (U)(Precision).gba"),
    array("name" => "Pokemon Rouge Feu", "icon" => "http://localhost/emu/cover/PkmnRougeFeu.png", "ROM" => "http://localhost/emu/ROM/GBA/Pokémon Rouge Feu.gba"),
    array("name" => "Pokemon Emeraude", "icon" => "http://localhost/emu/cover/PkmnEmeraude.png", "ROM" => "http://localhost/emu/ROM/GBA/Pokémon Emeraude.gba")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
  <?php foreach ($games as $game) { ?>
    <div class="col">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $game['ROM']; ?>">
          <input type="hidden" name="Console" value="gba">
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
