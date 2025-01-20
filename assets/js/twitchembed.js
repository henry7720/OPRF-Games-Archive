const base = "https://player.twitch.tv/?channel=";
var params = "&parent=" + window.location.hostname + "&autoplay=true";
var outputVideo = document.getElementById("twitch-player");
var unblockForm = document.getElementById("unblock-form");
var unblockInput = document.getElementById("unblock-input");

function getChannel(twitchUrl) {
  try {
    var url = new URL(twitchUrl);
  } catch (e) {
    return false;
  }
  if (url.hostname == "www.twitch.tv" || url.hostname == "twitch.tv") {
    var selectedUsername = url.pathname.substr(1);
    return (selectedUsername.length > 0 && selectedUsername.length <= 25) ? selectedUsername : false;
  }
}

function unblockTwitch(username) {
  username = username.trim().toLowerCase();
  if (getChannel(username)) {
    outputVideo.src = base + getChannel(username) + params;
  } else if (username.length > 0 && username.length <= 25) {
    outputVideo.src = base + username + params;
  } else {
    alert("That URL or username is invalid.");
  }
}

unblockForm.addEventListener("submit", function(e) {
  e.preventDefault();
  unblockTwitch(unblockInput.value);
});