"use strict";
// burger-menu
let burgerMenu = document.getElementById('burger-menu');

burgerMenu.addEventListener('click', function () {
  let navBar = document.querySelectorAll("#navbar nav a");
  let menu = document.getElementById("main-menu");
  
  this.classList.toggle("close");
  navBar.forEach(nav =>{
    nav.classList.toggle("overlay");
  })
  menu.classList.toggle("overlay");
});