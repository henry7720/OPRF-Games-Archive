<?php include "../../assets/includes/header.php"; ?>
    <title>Classic Minecraft - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>Classic Minecraft</h1>
    <p>Classic Minecraft is the web-adapted version of one of the original Minecraft Alphas. It is a more primitive version of Minecraft, but one that runs in the browser! This web-version created by Mojang for the 10th anniversary of Minecraft. Enjoy!</p>
    <div class="game-container">
      <iframe id="game-frame" src="https://classic.minecraft.net/" allowfullscreen></iframe>
      <br>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>