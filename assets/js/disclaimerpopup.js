var disclaimerPopup = document.createElement("div");
disclaimerPopup.className = "disclaimer-popup";
disclaimerPopup.innerHTML = "<div class=\"disclaimer-content\"><p>By using this website, you [the user] agree that you will use this website during recreational time only.</p><button id=\"yes-button\" class=\"button\">Yes</button><a href=\"https://www.google.com/\" class=\"button\">No</a></div>";

if (localStorage.getItem("disclaimer-agreed") === null) {
  document.body.appendChild(disclaimerPopup);
  var yesButton = document.getElementById("yes-button");
  yesButton.addEventListener("click", function() {
    localStorage.setItem("disclaimer-agreed", "true");
    document.body.removeChild(disclaimerPopup);
  });
}

var hiddenLinkOne = document.getElementById("wow");
hiddenLinkOne.addEventListener("click", function() {
  window.location.href = "/assets/img/";
});

var hiddenLinkTwo = document.getElementById("epic");
hiddenLinkTwo.addEventListener("click", function() {
  window.location.href = "/assets/js/";
});