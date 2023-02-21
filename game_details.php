<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Détails du jeu</title>
</head>
<body>
  <?php
  if (isset($_POST['ROM'])) {
    $ROM = $_POST['ROM'];
    echo "<h1>$ROM</h1>";
  }
  ?>
</body>
</html>