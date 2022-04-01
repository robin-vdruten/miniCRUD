/* image cycle */

$(document).ready(function () {
  if (window.location.pathname === "miniCRUD/index.html") {
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
  }
});

/* login */

$(document).ready(function () {
  if (window.location.pathname === "/miniCRUD/login.php") {
    let current = null;
    document.querySelector("#email").addEventListener("focus", function (e) {
      if (current) current.pause();
      current = anime({
        targets: "path",
        strokeDashoffset: {
          value: 0,
          duration: 700,
          easing: "easeOutQuart",
        },
        strokeDasharray: {
          value: "240 1386",
          duration: 700,
          easing: "easeOutQuart",
        },
      });
    });
    document.querySelector("#password").addEventListener("focus", function (e) {
      if (current) current.pause();
      current = anime({
        targets: "path",
        strokeDashoffset: {
          value: -336,
          duration: 700,
          easing: "easeOutQuart",
        },
        strokeDasharray: {
          value: "240 1386",
          duration: 700,
          easing: "easeOutQuart",
        },
      });
    });
    document.querySelector("#submit").addEventListener("focus", function (e) {
      if (current) current.pause();
      current = anime({
        targets: "path",
        strokeDashoffset: {
          value: -730,
          duration: 700,
          easing: "easeOutQuart",
        },
        strokeDasharray: {
          value: "530 1386",
          duration: 700,
          easing: "easeOutQuart",
        },
      });
    });
  }
});

/* burger toggle */
let menu = document.querySelector("#menu-bars");
let navbar = document.querySelector(".nav-bar");
let nav = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
  nav.classList.toggle("active");
};
