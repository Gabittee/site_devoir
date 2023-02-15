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
    array("name" => "Super Mario Bros", "icon" => "http://localhost/emu/cover/MarioBros1.png"),
    array("name" => "Super Mario Bros : The Lost Levels", "icon" => "http://localhost/emu/cover/MarioBros2JAP.png"),
    array("name" => "Super Mario Bros 2", "icon" => "http://localhost/emu/cover/MarioBros2USA.png"),
    array("name" => "Super Mario Bros 3", "icon" => "http://localhost/emu/cover/MarioBros3.png"),
    array("name" => "The Legend of Zelda", "icon" => "http://localhost/emu/cover/Zelda1.png"),
    array("name" => "Metroid", "icon" => "http://localhost/emu/cover/MetroidNES.png"),
    array("name" => "Fire emblem", "icon" => "http://localhost/emu/cover/FireEmblem1.png"),
    array("name" => "Tetris", "icon" => "http://localhost/emu/cover/Tetris.png"),
    array("name" => "Kirby Adventure", "icon" => "http://localhost/emu/cover/KirbyAdventure.png"),
    array("name" => "Dragon Quest", "icon" => "http://localhost/emu/cover/DQ1.png")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
    <?php foreach ($games as $game) { ?>
      <div class="col">
        <div class="card h-100">
          <a href="test.html">
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
