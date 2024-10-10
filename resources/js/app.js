import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// Navigation js
document.addEventListener("DOMContentLoaded", function () {
    const openNavbarButton = document.querySelector(".open-navbar");
    const closeNavbarButton = document.querySelector(".close-navbar");
    const navToggle = document.querySelector(".nav-toggle");
    const navbar = document.querySelector(".navbar");
    const sidebar = document.querySelector(".sidebar");
    const searchBar = document.querySelector(".searchbar");
    const mainContainer = document.querySelector(".main-container");
    const navbarContainer = document.querySelector(".navbar-container");

    const navItems = document.querySelectorAll(".nav-items .nav-item");
    const navLinksText = document.querySelectorAll(
        ".nav-items .nav-item a span"
    );
    const navHeaders = document.querySelectorAll(".nav-items .nav-header");

    const watchListsClose = document.querySelector(
        ".navbar .watch-lists .watch-close"
    );
    const watchListsExpand = document.querySelector(
        ".navbar .watch-lists .watch-expand"
    );
    const watchListsCloseSvgPath = document.querySelector("#closeSvgPath");
    const watchLists = document.querySelector(".watch-lists");
    const watchListsContainer = document.querySelector(
        ".watch-lists-container"
    );
    const smallLogo = document.querySelector(".small-logo");
    const largeLogo = document.querySelector(".large-logo");
    const watchListsCoins = document.querySelector(".watch-list-coins");
    const navBottom = document.querySelector(".nav-bottom");
    openNavbarButton?.addEventListener("click", function () {
        navbar.style.width = "240px";
        sidebar.style.width = "250px";
    });

    closeNavbarButton?.addEventListener("click", function () {
        navbar.style.width = "0";
        sidebar.style.width = "0";
    });

    navToggle?.addEventListener("click", function () {
        if (navToggle.classList.contains("active")) {
            navbar.style.width = "100px";
            sidebar.style.width = "110px";
            largeLogo.classList.add("hidden");
            smallLogo.classList.remove("hidden");
            navToggle.classList.add("rotate-180");
            navToggle.classList.remove("active");
            watchLists.classList.add("hidden");
            navBottom.classList.add("hidden");
            searchBar.classList.add("hidden");
            mainContainer.style.marginLeft = "100px";
            navLinksText.forEach((linkText) => {
                linkText.style.display = "none";
            });
            navHeaders.forEach((header) => {
                header.style.width = "35px";
                header.style.display = "flex";
                header.style.justifyContent = "center";
                header.style.alignItems = "center";
            });
            navItems.forEach((item) => {
                item.style.width = "75px";
                item.style.display = "flex";
                item.style.justifyContent = "center";
                item.style.alignItems = "center";
            });
        } else {
            navbar.style.width = "240px";
            sidebar.style.width = "250px";
            smallLogo.classList.add("hidden");
            largeLogo.classList.remove("hidden");
            navToggle.classList.remove("rotate-180");
            navToggle.classList.add("active");
            watchLists.classList.remove("hidden");
            navBottom.classList.remove("hidden");
            searchBar.classList.remove("hidden");
            mainContainer.style.marginLeft = "250px";
            navLinksText.forEach((linkText) => {
                linkText.style.display = "inline-block";
            });
            navHeaders.forEach((header) => {
                header.style.width = "190px";
                header.style.display = "block";
            });
            navItems.forEach((item) => {
                item.style.width = "206px";
                item.style.display = "block";
            });
        }
    });

    watchListsClose.addEventListener("click", () => {
        watchListsClose.classList.toggle("active");
        if (watchListsClose.classList.contains("active")) {
            watchListsExpand.classList.remove("hidden");
            watchListsCloseSvgPath.setAttribute("stroke", "#9E9E9E");
            watchListsContainer.classList.add("h-[15vh]");
            watchListsContainer.classList.remove("h-[0vh]");
            watchListsExpand.classList.remove("rotate-180");
            navbarContainer.classList.remove("hidden");
        } else {
            watchListsExpand.classList.add("hidden");
            watchListsCloseSvgPath.setAttribute("stroke", "#FFFFFF");
            watchListsContainer.classList.remove("h-[15vh]");
            watchListsContainer.classList.add("h-[0vh]");
            watchListsExpand.classList.remove("rotate-180");
            navbarContainer.classList.remove("hidden");
        }
    });

    watchListsExpand.addEventListener("click", () => {
        watchListsExpand.classList.toggle("active");
        watchListsExpand.classList.toggle("rotate-180");
        if (watchListsExpand.classList.contains("active")) {
            watchListsClose.classList.add("hidden");
            navbarContainer.classList.add("hidden");
            watchListsCloseSvgPath.setAttribute("stroke", "#9E9E9E");
            watchLists.classList.add("h-[100%]");
            watchListsContainer.classList.remove("h-[15vh]");
            watchListsContainer.classList.add("h-[100%]");
            watchListsCoins.classList.remove("h-[10vh]");
            watchListsCoins.classList.add("h-[50vh]");
        } else {
            watchListsClose.classList.remove("hidden");
            navbarContainer.classList.remove("hidden");
            watchListsCloseSvgPath.setAttribute("stroke", "#9E9E9E");
            watchLists.classList.remove("h-[100%]");
            watchListsContainer.classList.remove("h-[100%]");
            watchListsContainer.classList.add("h-[15vh]");
            watchListsCoins.classList.remove("h-[50vh]");
            watchListsCoins.classList.add("h-[10vh]");
        }
    });
});

// home-page js
document.addEventListener("DOMContentLoaded", function () {
    const periodTrade = document.querySelectorAll(".period-trade");

    periodTrade.forEach((period) => {
        period.addEventListener("click", () => {
            periodTrade.forEach((period) => {
                period.classList.remove("bg-light-oppositeContrastBg");
                period.classList.remove("dark:bg-oppositeContrastBg");
                period.classList.remove("text-light-oppositeContrastFont");
                period.classList.remove("dark:text-oppositeContrastFont");
            });
            period.classList.add("bg-light-oppositeContrastBg");
            period.classList.add("dark:bg-oppositeContrastBg");
            period.classList.add("text-light-oppositeContrastFont");
            period.classList.add("dark:text-oppositeContrastFont");
        });
    });
});

// theme-js
document.addEventListener("DOMContentLoaded", function () {
    const themeToggler = document.getElementById("theme-toggler");
    const html = document.documentElement;

    themeToggler.addEventListener("click", () => {
        if (html.classList.contains("dark")) {
            html.classList.remove("dark");
            localStorage.setItem("theme", "light");
        } else {
            html.classList.add("dark");
            localStorage.removeItem("theme");
        }
    });

    window.addEventListener("load", () => {
        if (localStorage.getItem("theme") === "light") {
            html.classList.remove("dark");
        }
    });
});
