/* landing page */
$(".sd").click(function () {
  $(".landing-page, .header").addClass("scrolled");
});

$(".landing-page").mousewheel(function (e) {
  if (e.deltaY < 0) {
    $(".landing-page, .header").addClass("scrolled");
    return false;
  }
});
$(window).mousewheel(function (e) {
  if ($(".landing-page.scrolled").length) {
    if ($(window).scrollTop() == 0 && e.deltaY > 0) {
      $(".landing-page, .header").removeClass("scrolled");
    }
  }
});

/* image cycle */

let images = [
  "Images/pizzalanding3.jpg",
  "Images/pizza-baked-chesse-spicy-7t-1920x1080.jpg",
];

let $top = $("#hero-inner");

let i = 0;

setInterval(function () {
  $top.animate({ opacity: 0 }, 400, function () {
    $("#hero-inner").css("background-image", "url(" + images[i] + ")");
    $top.animate({ opacity: 1 }, 400, function () {
      i++;

      if (i == images.length) {
        i = 0;
      }
    });
  });
}, 3500);

let swiper = new Swiper(".home-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 7500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  loop: true,
});

/* burger toggle */

document.addEventListener("DOMContentLoaded", function () {
  const navToggle = document.querySelector(".mobile-toggle");
  const bodyClasses = document.querySelector("body").classList;
  if (navToggle) {
    navToggle.addEventListener("click", function () {
      const body = document.querySelector("body");
      body.classList.toggle("nav-open");
    });
  }
});

document.addEventListener("DOMContentLoaded", function () {
  const menuBurger = document.querySelector(".menu");
  const btnBurger = document.querySelector(".menu");
  if (menuBurger) {
    menuBurger.addEventListener("click", function () {
      const burgerMenu = document.querySelector(".menu");
      burgerMenu.classList.toggle("opened");
    });
  }
});

/* javascript lessons */

const voorNaam = "Robin";
const achterNaam = "van Druten";
const volledigeNaam = `Mijn naam is : ${voorNaam} ${achterNaam}.`;

let leeftijd = 16;

console.log(volledigeNaam);

const text = document.querySelector("#yes");
console.log(text);

text.innerHTML = "doei!";
text.style.backgroundColor = "blue";
