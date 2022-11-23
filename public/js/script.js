"use strict";

const categories = document.getElementById("category");
const x = document.querySelector(".sidebarIconToggle");
const searchBtn = document.querySelector(".searchBtn");
const SearhField = document.querySelector(".searchPos");

x.addEventListener("click", function () {
    if (categories.style.display === "flex") {
        categories.style.display = "none";
    } else {
        categories.style.display = "flex";
    }
});

const sourceNews = document.querySelectorAll(".scrolling-wrapper");
sourceNews.forEach((el) => {
    if (el.childNodes.length == 1) {
        el.closest(".margin0").style.display = "none";
    }
});

searchBtn.addEventListener("click", function () {
    if (SearhField.style.display === "none") {
        SearhField.style.display = "flex";
    } else {
        SearhField.style.display = "none";
    }
});
