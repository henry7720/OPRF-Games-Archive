<?php include "../../assets/includes/header.php"; ?>
    <title>Pokémon Showdown - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>Pokémon Showdown</h1>
    <p>Pokémon Showdown  is a Pokémon battle simulator. Play Pokémon battles online! Play with randomly generated teams, or build your own! Fully animated!</p>
    <div class="game-container">
      <iframe id="game-frame" src="https://pokemonshowdown.com/" allowfullscreen></iframe>
      <br>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>