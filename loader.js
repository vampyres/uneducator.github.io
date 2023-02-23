document.addEventListener("DOMContentLoaded", function() {
  // Display the loading screen
  document.getElementById("loading-screen").style.display = "flex";

  // Hide the loading screen after 1 second
  setTimeout(function() {
    document.getElementById("loading-screen").style.display = "none";
  }, 1000);
});
