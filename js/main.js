/* image cycle */

$(document).ready(function () {
  if (window.location.pathname === "/miniCRUD/index.php") {
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
  if (window.location.pathname === "/miniCRUD/reservation.php") {
    const currentDateTime = new Date();
    let year = currentDateTime.getFullYear();
    let month = currentDateTime.getMonth() + 1;
    let date = currentDateTime.getDate() + 1;

    if (date < 10) {
      date = "0" + date;
    }
    if (month < 10) {
      month = "0" + month;
    }

    let dateTomorrow = year + "-" + month + "-" + date;
    const checkinElem = document.querySelector("#checkin-date");

    checkinElem.setAttribute("min", dateTomorrow);
  }
});

/* live search */

$(document).ready(function (e) {
  $("#search-box").keyup(function () {
    $("#show-up").css("display", $(this).val() !== "" ? "block" : "none");
    var text = $(this).val();
    $.ajax({
      type: "GET",
      url: "PHP/search.php",
      data: "txt=" + text,
      success: function (data) {
        $("#show-up").html(data);
      },
    });
  });
});

/* burger toggle */
const menu = document.querySelector("#menu-bars");
const navbar = document.querySelector(".nav-bar");
const nav = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle("fa-times");
  navbar.classList.toggle("active");
  nav.classList.toggle("active");
};

/* search bar toggle */
document.querySelector("#search-icon").onclick = () => {
  document.querySelector("#search-form").classList.toggle("active");
};

document.querySelector("#close").onclick = () => {
  document.querySelector("#search-form").classList.remove("active");
};
