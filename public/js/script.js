"use strict";

const categories = document.getElementById("category");
const x = document.querySelector(".sidebarIconToggle");

x.addEventListener("click", function () {
    if (categories.style.display === "block") {
        categories.style.display = "none";
    } else {
        categories.style.display = "block";
    }
});

const sourceNews = document.querySelectorAll(".scrolling-wrapper");
sourceNews.forEach((el) => {
    if (el.childNodes.length == 1) {
        el.closest(".margin0").style.display = "none";
    }
});

const row = document.querySelector(".row");
console.log(row.childNodes.length);
