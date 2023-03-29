<!doctype html>
<html ⚡>
<head>
  <meta charset="utf-8">
  <title>Superposer deux GIF avec AMP</title>
  <link rel="canonical" href="http://example.com">
  <meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
  <script async src="https://cdn.ampproject.org/v0.js"></script>
  <style amp-custom>
    /* Styles pour la mise en page */
    body {
      background-color: #f7f7f7;
      font-family: Arial, sans-serif;
      font-size: 16px;
      line-height: 1.4;
      margin: 0;
      padding: 0;
    }
    .container {
      margin: 50px auto;
      max-width: 600px;
      padding: 20px;
      text-align: center;
    }
    h1 {
      font-size: 36px;
      margin-bottom: 20px;
    }
    p {
      margin-bottom: 20px;
    }
    .explosion {
      position: absolute;
      top: 0;
      left: 0;
      width: 1000%;
      height: 1000%;
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Cliquez sur le GIF pour faire exploser la page !</h1>
    <amp-img src="giphy.gif" alt="GIF animé" width="400" height="400"
             on="tap:AMP.setState({explosion: true})">
    </amp-img>
    <amp-img src="explosion.gif" alt="GIF animé" width="400" height="400"
             [hidden]="!explosion" class="explosion">
    </amp-img>
    <p>Vous pouvez aussi <a href="index.php">retourner à la page d'accueil</a>.</p>
  </div>
  <amp-position-observer on="scroll:AMP.setState({explosion: true})"
                          intersection-ratios="0.5">
  </amp-position-observer>
  <script async custom-element="amp-position-observer"
          src="https://cdn.ampproject.org/v0/amp-position-observer-0.1.js"></script>
  <script async src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
</body>
</html>
