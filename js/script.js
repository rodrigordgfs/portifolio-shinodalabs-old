const btnMobile = document.getElementById("btn-mobile");
const menuItems = document.getElementById("menu__items");
const menu = document.getElementById("menu");
let backToTop = document.getElementById("back_to_top");
let projectItems = document.querySelectorAll(".project__item");

function toogleMenu(event) {
  if (event.type === "touchStart") event.preventDefault();
  menu.classList.toggle("active");
  const active = menu.classList.contains("active");
  event.currentTarget.setAttribute("aria-expanded", active);
  if (active) {
    event.currentTarget.setAttribute("aria-label", "Fechar menu");
  } else {
    event.currentTarget.setAttribute("aria-label", "Abrir menu");
  }
}

function toogleItemMenu(event) {
  if (event.type === "touchStart") event.preventDefault();
  menu.classList.toggle("active");
}

function toogleBackToTop() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function addEffectToProjectCard(content) {
    content.classList.remove("animate__fadeOutDown");
    content.classList.add("animate__animated", "animate__fadeInUp");
}

function removeEffectToProjectCard(content) {
    content.classList.remove("animate__fadeInUp");
    content.classList.add("animate__fadeOutDown");
}

// Show/Hide Back to top button
window.addEventListener("scroll", () => {
  if (
    document.body.scrollTop > 400 ||
    document.documentElement.scrollTop > 400
  ) {
    backToTop.classList.remove("animate__fadeOutDown");
    backToTop.classList.add("animate__animated", "animate__fadeInUp");
    backToTop.style.display = "block";
  } else {
    backToTop.classList.remove("animate__fadeInUp");
    backToTop.classList.add("animate__fadeOutDown");
  }
});

btnMobile.addEventListener("click", toogleMenu);
btnMobile.addEventListener("touchStart", toogleMenu);
menuItems.addEventListener("click", toogleItemMenu);
menuItems.addEventListener("touchStart", toogleItemMenu);
backToTop.addEventListener("click", toogleBackToTop);
projectItems.forEach(projectItem => {
    let content = projectItem.querySelector('.project__item_overlay_content');
    projectItem.onmouseover = () => addEffectToProjectCard(content);
    projectItem.onmouseout = () => removeEffectToProjectCard(content);
});
