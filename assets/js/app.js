// ===============================JavaScript to toggle the event entry content==============================================
document.querySelectorAll(".event-entry").forEach((entry) => {
  const date = entry.querySelector(".event-date");
  const content = entry.querySelector(".event-content");
  date.addEventListener("click", () => {
    content.classList.toggle("visible");
  });
});

let events = document.querySelectorAll(".event-entry");

events.forEach(function (event) {
  event.addEventListener("mouseover", function () {
    event.style.backgroundColor = "teal";
  });
  event.addEventListener("mouseout", function () {
    event.style.backgroundColor = "inherit";
  });
});

// ===============================Countdown content==============================================

let expireDate = new Date("Feb,10 2023 10:33:00").getTime();

function interval() {
  let current = new Date().getTime();
  console.log(current);

  let duration = expireDate - current;
  console.log(current);

  //   calculate days===========================

  let days = Math.floor(duration / (1000 * 60 * 60 * 24));

  //   Calculate Hours=============================

  let hours = Math.floor((duration % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));

  //   Calculate Minutes===========================================

  let mins = Math.floor((duration % (1000 * 60 * 60)) / (1000 * 60));

  //   Calculate Seconds==========================================

  let secs = Math.floor((duration % (1000 * 60)) / 1000);

  let countDown = document.getElementById("count-down-content");

  if (duration < expireDate) {
    countDown.innerHTML = `
      <div class="days common-margin">
            <div class="circle-inner">
                <div class="content">${days}</div>
            </div>
            <div class="text">DAYS</div>
        </div>
        <div class="hours common-margin">
            <div class="circle-inner">
                <div class="content">${hours}</div>
            </div>
            <div class="text">HOURS</div>
        </div>
        <div class="mins common-margin">
            <div class="circle-inner">
                <div class="content">${mins}</div>
            </div>
            <div class="text">MINUTES</div>
        </div>
        <div class="secs common-margin">
            <div class="circle-inner">
                <div class="content">${secs}</div>
            </div>
            <div class="text">SECONDS</div>
        </div>
  `;
  } else {
  }
}

interval(interval, 1000);
setInterval(interval, 1000);

// ========================DECLARATIONS===================================================

// GRAB THE CLICKABLE LINKS========================================

const displayLoginLink = document.querySelector(".display-login-link");
const displayRegisterLink = document.querySelectorAll(".display-register-link");
const displayChangePasswordlink = document.querySelector(
  ".display-change-password-link"
);

// GRAB THE FORMS

const loginForm = document.querySelector("#login-form");
const changePasswordForm = document.querySelector("#change-password-form");
const registerForm = document.querySelector("#register-form");

// =======================================EVENTS============================================

displayLoginLink.addEventListener("click", (e) => {
  e.preventDefault;
  removeDisplayRegister();
  displayLogin();
});

displayRegisterLink.forEach((link) => {
  link.addEventListener("click", (e) => {
    e.preventDefault;
    removeDisplayLogin();
    removeDisplayChangePassword();
    displayRegister();
  });
});

displayRegisterLink.addEventListener("click", (e) => {
  e.preventDefault;
  removeDisplayLogin();
  displayRegister();
});

displayChangePasswordlink.addEventListener("click", (e) => {
  e.preventDefault();
  removeDisplayLogin();
  displayChangePassword();
  displayRegister();
});

// ===============================FUNCTIONS==============================================

function displayRegister() {
  registerForm.classList.add("active-form");
}
function removeDisplayRegister() {
  registerForm.classList.remove("active-form");
}

function displayLogin() {
  loginForm.classList.add("active-form");
}
function removeDisplayLogin() {
  loginForm.classList.remove("active-form");
}

function displayChangePassword() {
  changePasswordForm.classList.add("active-form");
}
function removeDisplayChangePassword() {
  changePasswordForm.classList.remove("active-form");
}
