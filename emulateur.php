<link rel="stylesheet" type="text/css" href="style.css">
<?php include("navbar.html"); ?>
<link rel="stylesheet" href="ahh.css" type="text/css" />

<div style="width:640px;height:480px;max-width:100%" id="game-container">
  <div id="game"></div>
</div>

<div class="size-options">
  <label for="size1">
    <input type="radio" id="size1" name="screen-size" value="320x240">
    <span class="checkmark"></span>
    <span class="label-text">x0.5</span>
  </label>
  
  <label for="size2">
    <input type="radio" id="size2" name="screen-size" value="480x360">
    <span class="checkmark"></span>
    <span class="label-text">x0.75</span>
  </label>
  
  <label for="size3">
    <input type="radio" id="size3" name="screen-size" value="640x480" checked>
    <span class="checkmark"></span>
    <span class="label-text">x1</span>
  </label>
  
  <label for="size4">
    <input type="radio" id="size4" name="screen-size" value="800x600">
    <span class="checkmark"></span>
    <span class="label-text">x1.25</span>
  </label>
  
  <label for="size5">
    <input type="radio" id="size5" name="screen-size" value="960x720">
    <span class="checkmark"></span>
    <span class="label-text">x1.5</span>
  </label>
</div>


<?php
  if (isset($_POST['ROM'])) {
    $ROM = $_POST['ROM'];
  }

  if (isset($_POST['Console'])) {
    $Console = $_POST['Console'];
  }
?>

<div class="card w-100">
  <div class="card-body">
    <?php if (isset($_POST['Description'])) {
      $Description = $_POST['Description'];
      echo "<p class='card-text small text-center'>$Description</p>";
    } ?>
  </div>
</div>

<script type="text/javascript">
  var EJS_player = '#game';
  var EJS_gameUrl = "<?php echo $ROM; ?>"; // Url to Game rom
  var EJS_core = "<?php echo $Console; ?>";
  var EJS_mouse = false; // SNES Mouse
  var EJS_multitap = false; // SNES Multitap
  var container = document.getElementById("game-container");
  var radios = document.getElementsByName("screen-size");

  for (var i = 0; i < radios.length; i++) {
    radios[i].addEventListener("change", function() {
      container.style.width = this.value.split("x")[0] + "px";
      container.style.height = this.value.split("x")[1] + "px";
    });
  }
</script>
<script src="https://www.emulatorjs.com/loader.js"></script>
