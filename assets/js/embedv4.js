var unblockForm = document.getElementById("unblock-form");
var urlInput = document.getElementById("url-input");
var outputFrame = document.getElementById("game-frame");
var linkSharer = document.getElementById("link-sharer");
var linkSharerInput = document.getElementById("link-sharer-input");

function isValidUrl(url) {
  try {
    new URL(url);
  } catch (e) {
    return false;
  }
  return true;
}

function unblock(enteredUrl) {
  enteredUrl = enteredUrl.trim();
  if (isValidUrl(enteredUrl)) {
    outputFrame.src = enteredUrl;
    linkSharerInput.value = window.location.href.replace(window.location.search, "") + "?url=" + encodeURIComponent(enteredUrl);
    // linkSharerInput.value = window.location.protocol + "//" + window.location.hostname + window.location.pathname + "?url=" + encodeURIComponent(enteredUrl);
    linkSharer.style.display = "block";
    linkSharerInput.focus();
  } else {
    window.alert("You entered an invalid URL!");
  }
}

linkSharerInput.addEventListener("click", function() {
  var copiedToClipboard = document.getElementById("copied-to-clipboard");
  linkSharerInput.select();
  document.execCommand("copy");
  copiedToClipboard.style.display = "block";
  window.scrollTo(0, document.body.scrollHeight);
});

document.addEventListener("DOMContentLoaded", function() {
  var currentUrl = new URL(window.location.href);
  if (isValidUrl(decodeURIComponent(currentUrl.searchParams.get("url")))) {
    outputFrame.src = decodeURIComponent(currentUrl.searchParams.get("url"));
    urlInput.value = decodeURIComponent(currentUrl.searchParams.get("url"));
  }
});

unblockForm.addEventListener("submit", function(e) {
  e.preventDefault();
  unblock(urlInput.value);
});