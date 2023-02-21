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
    array("name" => "Super Mario Bros", "icon" => "http://localhost/emu/cover/MarioBros1.png", "ROM" => "http://localhost/emu/ROM/NES/Super Mario Bros 1.nes"),
    array("name" => "Super Mario Bros : The Lost Levels", "icon" => "http://localhost/emu/cover/MarioBros2JAP.png", "ROM" => "http://localhost/emu/ROM/NES/Super Mario Bros 2 (Lost Levels) (Unl).nes"),
    array("name" => "Super Mario Bros 2", "icon" => "http://localhost/emu/cover/MarioBros2USA.png", "ROM" => "http://localhost/emu/ROM/NES/Super Mario Bros. 2 FR.nes"),
    array("name" => "Super Mario Bros 3", "icon" => "http://localhost/emu/cover/MarioBros3.png", "ROM" => "http://localhost/emu/ROM/NES/supermariobros3frnes.nes"),
    array("name" => "The Legend of Zelda", "icon" => "http://localhost/emu/cover/Zelda1.png", "ROM" => "http://localhost/emu/ROM/NES/Zelda1.nes"),
    array("name" => "Metroid", "icon" => "http://localhost/emu/cover/MetroidNES.png", "ROM" => "http://localhost/emu/ROM/NES/Metroid.nes"),
    array("name" => "Fire emblem", "icon" => "http://localhost/emu/cover/FireEmblem1.png", "ROM" => "http://localhost/emu/ROM/NES/Fire Emblem - Ankoku Ryuu to Hikari no Tsurugi (English v1.0).nes"),
    array("name" => "Tetris", "icon" => "http://localhost/emu/cover/Tetris.png", "ROM" => "http://localhost/emu/ROM/NES/Tetris.nes"),
    array("name" => "Kirby Adventure", "icon" => "http://localhost/emu/cover/KirbyAdventure.png", "ROM" => "http://localhost/emu/ROM/NES/Kirby's Adventure (FC).nes"),
    array("name" => "Dragon Quest", "icon" => "http://localhost/emu/cover/DQ1.png", "ROM" => "http://localhost/emu/ROM/NES/Dragon Warrior (F).NES")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
  <?php foreach ($games as $game) { ?>
    <div class="col">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $game['ROM']; ?>">
          <input type="hidden" name="Console" value="nes">
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
