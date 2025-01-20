<?php include "../assets/includes/header.php"; ?>
    <title>Site Embedder - OPRF Games</title>
  </head>
  <body>
<?php include "../assets/includes/navbar.html"; ?>
    <h1>Site Embedder</h1>
    <p>This is a site embedder in which you put in a URL, and it will embed that site; it may even unblock it. REQUIRES HTTP/HTTPS! If you want a permanent link to the URL (so it loads when you go to it, every time) copy the permanent link after entering a URL. It might not work on certain sites, but there's a good chance it will. The only way to find out is to try it. Download <a href="https://www.linearequations.cf/assets/downloads/site-embedder.html" download>portable version</a>.</p>
    <div class="game-container">
      <iframe id="game-frame" src="/assets/frames/embedderdefault.html" allowfullscreen></iframe>
      <form id="unblock-form" autocomplete="off">
        <input id="url-input" type="url" maxlength="2000" placeholder="Site URL">
        <input type="submit" class="button" value="Unblock!">
      </form>
      <p id="link-sharer" style="display: none;">Here's your permanent link (click on the text to copy it and bookmark for later use): <input id="link-sharer-input" type="text" readonly><span id="copied-to-clipboard" style="display: none;">Link copied to clipboard.</span></p>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/embedv4.js"></script>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>