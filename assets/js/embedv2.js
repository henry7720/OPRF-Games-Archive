var unblockForm = document.getElementById("unblock-form");
var urlInput = document.getElementById("url-input");
var outputFrame = document.getElementById("game-frame");

function unblock(url) {
  url = url.trim();
  try {
    new URL(url);
  } catch (e) {
    alert("You entered an invalid URL!");
    return false;
  }
  outputFrame.src = "http://linearequationsunblocker.ml/proxy.php?" + url;
}

unblockForm.addEventListener("submit", function(e) {
  e.preventDefault();
  unblock(urlInput.value);
});