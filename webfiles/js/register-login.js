"use strict";

// connexion et enregistrement

let action1 = document.getElementsByClassName("action")[1] //login
let action2 = document.getElementsByClassName("action")[0] //register
let login = document.getElementsByClassName("login-form")[0];
let register = document.getElementsByClassName("register-form")[0];

action1.addEventListener("click", (e) => {
  e.preventDefault();
  login.classList.add("togle");
  register.classList.remove("togle");
})

action2.addEventListener("click", (e) => {
  e.preventDefault();
  register.classList.add("togle");
  login.classList.remove("togle");
})


// $('.message a').click(function () {
//   $('form').animate({ height: "toggle", opacity: "toggle" }, "slow");
// });
