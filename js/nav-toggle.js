var header = document.querySelector(".site-header");
var toggle = document.querySelector(".nav-toggle");

function setMenu(open) {
  header.classList.toggle("is-nav-open", open);
  toggle.setAttribute("aria-expanded", open);
}

toggle.addEventListener("click", function () {
  setMenu(!header.classList.contains("is-nav-open"));
});

header.querySelectorAll("nav a").forEach(function (link) {
  link.addEventListener("click", function () {
    setMenu(false);
  });
});

document.addEventListener("keydown", function (event) {
  if (event.key === "Escape" && header.classList.contains("is-nav-open")) {
    setMenu(false);
    toggle.focus();
  }
});
