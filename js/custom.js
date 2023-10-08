document.addEventListener("DOMContentLoaded", function () {
  var openMenuButton = document.getElementById("checkbox1");
  var offCanvasMenu = document.querySelector(".off-canvas-menu");

  openMenuButton.addEventListener("click", function () {
    offCanvasMenu.classList.toggle("open");
  });
});
