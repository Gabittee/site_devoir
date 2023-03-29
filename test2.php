<!DOCTYPE html>
<html>
<head>
  <title>Importer une Image</title>
  <meta charset="UTF-8">
  <style>
    #preview {
      width: 300px;
      height: 200px;
      border: 2px dashed gray;
      padding: 10px;
      margin: 10px;
      text-align: center;
      font-size: 20px;
    }
  </style>
</head>
<body>
  <div>
    <label for="image-input">Choisir une image à importer :</label>
    <input type="file" id="image-input" accept="image/*">
  </div>
  <div id="preview">Aucune image sélectionnée</div>

  <script>
    var imageInput = document.getElementById('image-input');
    var preview = document.getElementById('preview');

    imageInput.addEventListener('change', function() {
      var file = this.files[0];
      var reader = new FileReader();

      reader.onload = function() {
        preview.innerHTML = '<img src="' + reader.result + '"/>';
      }

      if (file) {
        reader.readAsDataURL(file);
      } else {
        preview.innerHTML = "Aucune image sélectionnée";
      }
    });
  </script>
</body>
</html>
