document.addEventListener("DOMContentLoaded",()=>{var e=document.querySelector(".image_show");e&&e.querySelectorAll(".thumbnail").forEach(e=>{e.addEventListener("mouseenter",()=>{document.querySelector(".carousel-container").querySelector(".thumbnail").setAttribute("href",e.getAttribute("href")),document.querySelector(".carousel-container").querySelector("img").setAttribute("src",e.getAttribute("href"))})})});