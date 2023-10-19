document.addEventListener("DOMContentLoaded", function () {
  /* open and close the animated off canvas nav */
  var openMenuButton = document.getElementById("checkbox1");
  var offCanvasMenu = document.querySelector(".off-canvas-menu");

  // Function to close the off-canvas menu
  function closeMenu() {
    offCanvasMenu.classList.remove("open");
  }

  // Ensure the checkbox is unchecked on page load
  openMenuButton.checked = false;

  // Add a click event listener to the openMenuButton
  openMenuButton.addEventListener("click", function () {
    offCanvasMenu.classList.toggle("open");
  });

  // Ensure the menu is closed when the page is fully loaded
  closeMenu();

  // Select the div element with the id "bookBtn"
  const bookBtn = document.querySelector("#bookBtn");

  // Add a delay of three seconds (3000 milliseconds) before adding the CSS class
  setTimeout(function () {
    // Add the CSS class "highlight-1" to the div
    bookBtn.classList.add("highlight-on-load");
  }, 1000);
  /* End*/
  /* appear*/
  const items = document.querySelectorAll(".appear2");

  function active(entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add("inview2");
      } else {
        entry.target.classList.remove("inview2");
      }
    });
  }

  const io2 = new IntersectionObserver(active);

  items.forEach(function (item) {
    io2.observe(item);
  });
  /* appear end */
});
