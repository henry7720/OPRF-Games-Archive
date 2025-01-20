<?php include "../assets/includes/header.php"; ?>
    <title>Site Embedder Alternate - OPRF Games</title>
  </head>
  <body>
<?php include "../assets/includes/navbar.html"; ?>
    <h1>Site Embedder Alternate</h1>
    <p>This is a site unblocker in which you put in a URL, and it will embed that site through a proxy. The form REQUIRES HTTP/HTTPS preceding the URL! If you want a permanent link to the URL (so it loads when you go to it, every time) copy the permanent link after entering a URL. It might not work on certain sites, but there's a good chance it will. The only way to find out is to try it.</p>
    <div class="game-container">
      <iframe id="game-frame" src="/assets/frames/embedderaltdefault.html" allowfullscreen></iframe>
      <form id="unblock-form" autocomplete="off">
        <input id="url-input" type="url" maxlength="255" placeholder="Site URL">
        <input type="submit" class="button" value="Unblock!">
      </form>
      <p id="link-sharer" style="display:none;">Here's your permanent link (click on the text to copy it &amp; bookmark for later use): <input id="link-sharer-input" type="text" readonly><span id="copied-to-clipboard" style="display:none;">Link copied to clipboard.</span></p>
      <button id="fullscreen-button" class="button"><i class="fa fa-expand"></i> Fullscreen</button>
    </div>
    <script src="/assets/js/embedaltv1.js"></script>
    <script src="/assets/js/fullscreen.js"></script>
  </body>
</html>