var unblockForm = document.getElementById("unblock-form");
var urlInput = document.getElementById("url-input");
var outputFrame = document.getElementById("game-frame");

function unblock(url) {
  var urlRegex = new RegExp(/(http(s)?:\/\/.)?(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/gi);
  url = url.trim();
  if (urlRegex.test(url)) {
    if (url.startsWith("https://") || url.startsWith("http://") || url.startsWith("//")) {
      outputFrame.src = url;
    } else {
      outputFrame.src = "//" + url;
    }
  } else {
    alert("You entered an invalid URL!");
  }
}

unblockForm.addEventListener("submit", function(e) {
  e.preventDefault();
  unblock(urlInput.value);
});