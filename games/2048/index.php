<?php include "../../assets/includes/header.php"; ?>
    <title>2048 - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>2048</h1>
    <p>2048 is a great game with very simple instructions: join the tiles and get to 2048!</p>
    <div class="game-container">
      <iframe id="game-frame" src="/assets/embeds/2048/"></iframe>
      <br>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>