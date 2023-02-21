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
    array("name" => "Super Mario 64", "icon" => "http://localhost/emu/cover/Mario64.png", "ROM" => "http://localhost/emu/ROM/N64/SM64 NTSC_FR.z64"),
    array("name" => "Mario Kart 64", "icon" => "http://localhost/emu/cover/MK64.png", "ROM" => "http://localhost/emu/ROM/N64/Mario Kart 64 (USA).n64"),
    array("name" => "Super Smash Bros", "icon" => "http://localhost/emu/cover/SMB64.png", "ROM" => "http://localhost/emu/ROM/N64/Super Smash Bros.v64"),
    array("name" => "The Legend of Zelda - Ocarina of Time", "icon" => "http://localhost/emu/cover/ZeldaOOT.png", "ROM" => "http://localhost/emu/ROM/N64/The Legend of Zelda - Ocarina of Time.v64"),
    array("name" => "Pokémon Stadium 2", "icon" => "http://localhost/emu/cover/PkmnStadium2.png", "ROM" => "http://localhost/emu/ROM/N64/Pokémon Stadium 2.v64"),
    array("name" => "Super Mario 3D World 64 (Rom Hack)", "icon" => "http://localhost/emu/cover/Mario3dWorld64.png", "ROM" => "http://localhost/emu/ROM/N64/SM3DW64 V3.z64")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
  <?php foreach ($games as $game) { ?>
    <div class="col">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $game['ROM']; ?>">
          <input type="hidden" name="Console" value="n64">
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
