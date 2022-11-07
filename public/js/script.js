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
