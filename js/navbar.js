// Toggle navigation function
function toggleNav() {
  console.log("Toggle navigation function called");
  var navLinks = document.querySelectorAll(".nav-links");
  navLinks.forEach(function (link) {
    link.classList.toggle("show-nav");
  });
}
