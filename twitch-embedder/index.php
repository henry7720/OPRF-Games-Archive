<?php include "../assets/includes/header.php"; ?>
    <title>Twitch Embedder - OPRF Games</title>
  </head>
  <body>
<?php include "../assets/includes/navbar.html"; ?>
    <h1>Twitch Embedder</h1>
    <p>Put a username or livestream URL (URL REQUIRES HTTPS) into the form and the stream should be embedded, and maybe even unblocked! Here are some popular streamers (click link and load): <a href="javascript:unblockTwitch('drdisrespectlive')">DrDisRespectLIVE</a>, <a href="javascript:unblockTwitch('cdnthe3rd')">CDNThe3rd</a>, <a href="javascript:unblockTwitch('dakotaz')">dakotaz</a>, <a href="javascript:unblockTwitch('drlupo')">DrLupo</a>, <a href="javascript:unblockTwitch('timthetatman')">TimTheTatman</a>, <a href="javascript:unblockTwitch('tsm_myth')">TSM_Myth</a>, <a href="javascript:unblockTwitch('tsm_daequan')">TSM_Daequan</a>, <a href="javascript:unblockTwitch('tsm_hamlinz')">TSM_Hamlinz</a>, <a href="javascript:unblockTwitch('shroud')">shroud</a> and <a href="javascript:unblockTwitch('sypherpk')">SypherPK</a>.</p>
    <div class="video-container">
      <iframe id="twitch-player" src="https://player.twitch.tv/?channel=ninja&parent=<?php echo $_SERVER["SERVER_NAME"]; ?>&autoplay=true" allowfullscreen></iframe>
      <form id="unblock-form" autocomplete="off">
        <label for="unblock-input">https://twitch.tv/</label>
        <input type="text" id="unblock-input" maxlength="160" placeholder="Channel or URL">
        <input type="submit" class="button" value="Unblock!">
      </form>
    </div>
    <script src="/assets/js/twitchembed.js"></script>
  </body>
</html>