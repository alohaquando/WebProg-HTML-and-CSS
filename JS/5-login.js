var loginForm = document.querySelector("form");
loginForm.addEventListener("submit", LogIn);

function LogIn() {
  logged_in_email = document.querySelector("#login_email").value;
  localStorage.setItem("logged_in_email", logged_in_email);
  localStorage.setItem("account_state", "in");
}
