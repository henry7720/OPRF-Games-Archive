<?php include "../../assets/includes/header.php"; ?>
    <script src="swfobject_2_3.js" type="text/javascript"></script>
    <title>Happy Wheels - OPRF Games</title>
  </head>
  <body>
<?php include "../../assets/includes/navbar.html"; ?>
    <h1>Happy Wheels</h1>
    <!--<p>Run 3 is a great jump-obstacle game. It's got some great catchy background music, and addictive gameplay.</p> -->
    <div class="game-container" id="game-container">
      <script type="text/javascript">
        var flashvars = {
          session: "c5e04ea69c1fae8ba454f686ad7b1e00",
          file: "https://swf.totaljerkface.com/game_e_v1_87_g.swf"
        };

        var params = {
          menu: "false",
          bgcolor: "#3d88c7",
          allowscriptaccess: "always",
          allowFullScreenInteractive: "true"
        };

        var path = "https://swf.totaljerkface.com/";
        var expInstall = path + "expressInstall.swf";
        var preloader = path + ((self == top) ? "hw_preloader_bf.swf" : "hw_demo.swf");

        swfobject.embedSWF(preloader, "game_container", "900", "500",  "10.0.0", expInstall, flashvars, params);
      </script>
    </div>
  </body>
</html>