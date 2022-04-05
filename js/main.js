/* image cycle */

$(document).ready(function () {
  if (window.location.pathname === "miniCRUD/index.php") {
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

/* reservations */

$(document).ready(function () {
  if (window.location.pathname === "miniCRUD/reservation.php") {
    var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = currentDateTime.getMonth() + 1;
    var date = currentDateTime.getDate() + 1;

    if (date < 10) {
      date = "0" + date;
    }
    if (month < 10) {
      month = "0" + month;
    }

    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#checkin-date");

    checkinElem.setAttribute("min", dateTomorrow);

    checkinElem.onchange = function () {
      checkoutElem.setAttribute("min", this.value);
    };
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
