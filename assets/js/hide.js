document.addEventListener("keydown", function(e) {
  if (e.keyCode === 66 && e.ctrlKey || e.keyCode === 66 && e.metaKey) {
    window.location.href = "/";
  }
});