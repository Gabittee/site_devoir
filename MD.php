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
    array("name" => "Sonic The Hedgehog", "icon" => "http://localhost/emu/cover/Sonic1.png", "ROM" => "http://localhost/emu/ROM/MegaDrive/Sonic The Hedgehog (Patch FR).gen", "Description" => "Sonic est un hérisson bleu et accessoirement un connard d’écolo qui veux protéger les animaux et la nature de la menace du docteur Eggman. Du coup sonic bah il court vite et il va tabasser le docteur Eggman car sonic déteste le capitalisme et les robots. Pourtant les robots c’est cool,bien plus que des animaux tout nuls."),
    array("name" => "Sonic The Hedgehog 2", "icon" => "http://localhost/emu/cover/Sonic2.png", "ROM" => "http://localhost/emu/ROM/MegaDrive/Sonic The Hedgehog 2.gen", "Description" => "Sonic est un hérisson bleu et accessoirement un connard d’écolo qui veux protéger les animaux et la nature de la menace du docteur Eggman. Mais cette fois ci il serat accompagné de Tails, un renard jaune qui peux voler avec son cul. Sonic étant très jaloux de ne pas pouvoir voler avec son propre cul, il décide de diriger toute sa haine envers les robots d’Eggman."),
    array("name" => "Sonic The Hedgehog 3 & Knuckles", "icon" => "http://localhost/emu/cover/Sonic3EtKnuckles.png", "ROM" => "http://localhost/emu/ROM/MegaDrive/Sonic 3 & Knuckles.gen", "Description" => "Sonic est un hérisson bleu et accessoirement un connard d’écolo qui veux protéger les animaux et la nature de la menace du docteur Eggman. Mais cette fois-ci il devra aussi se battre contre un truc rouge (je sais pas quel animal s’est). nommer Knuckles. Eggman a manipuler Knuckles (car ce dernier a le Q.I d’une chaussure) afin qu’il se batte contre Sonic. Et Sonic il court toujours aussi vite, du coup il est maintenant plus rapide qu’une table basse."),
    array("name" => "Michael Jackson&#039;s Moonwalker", "icon" => "http://localhost/emu/cover/Wonki.png", "ROM" => "http://localhost/emu/ROM/MegaDrive/Michael Jackson&#039;s Moonwalker (Patch FR).bin", "Description" => "&#34;Michael Jackson&#039;s Moonwalker&#34; est un jeu de la Sega Mega Drive où vous incarnez Michael Jackson qui doit sauver des enfants kidnappés par un méchant. Mais le plus important, c'est que dans ce jeu, Michael Jackson possède une attaque spéciale incroyablement puissante appelée le &#34;Wonki&#34;. Cette attaque consiste en une danse qui fait exploser tous les ennemis sur l'écran grâce au style wonkiesque du Roi de la pop.  Le &#34;Wonki&#34; est d'une efficacité redoutable. Michael Jackson secoue ses bras et ses jambes dans toutes les directions, faisant des mouvements improbables et des pas de danse complètement fous. Les ennemis ne peuvent pas résister à cette danse folle et décèdent instantanément.Malgré son apparence ridicule, le &#34;Wonki&#34; est l'arme secrète de Michael Jackson dans ce jeu, et il est capable de sauver des vies et de vaincre les méchants en un rien de temps. Si vous êtes fan de Michael Jackson et de ses danses improbables, alors &#34;Michael Jackson&#039;s Moonwalker&#34; est le jeu qu'il vous faut ! Le &#34;Wonki&#34; lui permet aussi de se transformer en voiture du futur super classe."),
    array("name" => "Dragon Ball Z - L'Appel du Destin", "icon" => "http://localhost/emu/cover/DBZAppelDestin.png", "ROM" => "http://localhost/emu/ROM/MegaDrive/Dragon Ball Z - L'Appel du Destin.gen", "Description" => "Sangoku il se bat contre les méchants et il est très fort, mais pas autant que l’armée russe.")
  );
?>

<div class="container my-5">
  <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 row-cols-xl-4 g-4">
  <?php foreach ($games as $game) { ?>
    <div class="col">
      <div class="card h-100">
        <form method="post" action="emulateur.php">
          <input type="hidden" name="ROM" value="<?php echo $game['ROM']; ?>">
          <input type="hidden" name="Console" value="segaMD">
          <input type="hidden" name="Description" value="<?php echo $game['Description']; ?>">
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
