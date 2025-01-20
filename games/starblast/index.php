<?php include "../../assets/includes/header.php"; ?>
    <title>Starblast - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>Starblast</h1>
    <p>Starblast is a great game based on the classic game called asteroids, but with a twist!</p>
    <div class="game-container">
      <iframe id="game-frame" src="https://starblast.io/" allowfullscreen></iframe>
      <br>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>