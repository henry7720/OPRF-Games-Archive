var fullscreenButton = document.getElementById("fullscreen-button");
fullscreenButton.addEventListener("click", function() {
  var gameFrame = document.getElementById("game-frame");
  if (document.fullscreenEnabled || document.webkitFullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled) {
    if (gameFrame.requestFullscreen) {
      gameFrame.requestFullscreen();
    } else if (gameFrame.webkitRequestFullscreen) {
      gameFrame.webkitRequestFullscreen();
    } else if (gameFrame.mozRequestFullScreen) {
      gameFrame.mozRequestFullScreen();
    } else if (gameFrame.msRequestFullscreen) {
      gameFrame.msRequestFullscreen();
    }
  } else {
    alert("Fullscreen is unavailable!\nIt's likely because your browser is outdated or this site is being displayed improperly.")
  }
});