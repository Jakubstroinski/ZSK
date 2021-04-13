const registerForm = document.querySelector("#regForm");
const registerButton = document.querySelector("#regBut");

registerButton.addEventListener("click", (e) => {
    registerForm.innerHTML = "<p>Rejestracja przebiegła pomyślnie!</p>"
});