document.addEventListener("DOMContentLoaded", function () {
  var header = document.querySelector(".site-header");
  if (!header) return;

  function updateHeader() {
    if (window.scrollY > 80) {
      header.classList.add("is-scrolled");
    } else {
      header.classList.remove("is-scrolled");
    }
  }

  updateHeader();

  window.addEventListener("scroll", function () {
    window.requestAnimationFrame(updateHeader);
  });
});
