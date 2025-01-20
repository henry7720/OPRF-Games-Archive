<?php include "../../assets/includes/header.php"; ?>
    <title>2048 Cupcakes - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>2048 Cupcakes</h1>
    <p>2048 Cupcakes is a fun twist on 2048: the tiles are cupcakes!</p>
    <div class="game-container">
      <iframe id="game-frame" src="/assets/embeds/2048-cupcakes/index.html"></iframe>
      <br>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>