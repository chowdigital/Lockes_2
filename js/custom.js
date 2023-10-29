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

  // Get a reference to the checkbox element
  const checkbox = document.getElementById("checkbox1");

  // Add an event listener to listen for changes in the checkbox state
  checkbox.addEventListener("change", function () {
    // Check if the checkbox is checked
    if (checkbox.checked) {
      // Apply overflow: hidden to the body tag
      //   document.body.style.overflow = "hidden";
    } else {
      // Remove overflow: hidden from the body tag
      document.body.style.overflow = "auto";
    }
  });
  // Select the div element with the id "bookBtn"
  const bookBtn = document.querySelector("#bookBtn");

  // Add a delay of three seconds (3000 milliseconds) before adding the CSS class
  setTimeout(function () {
    // Add the CSS class "highlight-1" to the div
    bookBtn.classList.add("highlight-on-load");
  }, 1000);
  /* End*/

  /* appear navigation end */
  /* appear food & drink menus */
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

  /* appear food & drink menus end */
  /* Parallax start */
  var images = document.querySelectorAll("img.parallax");
  new simpleParallax(images);

  /* Responsive Div Height Start */
  // Get the height of the first div (ctaText1)
  var ctaText1 = document.getElementById("ctaText1");
  var ctaText1Height = ctaText1.clientHeight;

  // Set the height of the second div (ctaText2) to match the height of the first div
  var ctaText2 = document.getElementById("ctaBg1");
  ctaText2.style.height = ctaText1Height + "px";

  /* Responsive Div Height End */
  /* scroll size element */

  const scrollingElement = document.getElementById("logoSection1");
  const fadeVideo = document.getElementById("myVideoLg");
  const fadeMessage = document.getElementById("keyMessage");

  window.addEventListener("scroll", () => {
    const scrollPosition = window.scrollY;
    const newHeight = 80 + scrollPosition / 3;
    const newOpacity = 1.2 - scrollPosition / 800;
    const newOpacity2 = 1 - scrollPosition / 600;
    scrollingElement.style.height = newHeight + "vh";
    fadeVideo.style.opacity = newOpacity;
    fadeMessage.style.opacity = newOpacity2;
    scrollingElement.style.opacity = newOpacity2;
  });
  /* scroll size element End */
});
