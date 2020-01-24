require("./bootstrap");

const closeDevAlert = document.querySelector(".close");

closeDevAlert.addEventListener("click", el => {
    document.getElementById("alert").classList.toggle("hidden");
});
