<?php include "../../assets/includes/header.php"; ?>
    <title>Poptropica - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>Poptropica</h1>
    <div class="game-container">
      <iframe id="game-frame" src="https://www.poptropica.com/" scrolling="no" allowfullscreen></iframe>
      <br>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>