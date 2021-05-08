window.onload = window.onpageshow = function () {
  if (localStorage.getItem("account_state") == null) {
    document.querySelector(".body_spacing").innerHTML = `<div class="cart-text">
	  <p>You're not logged in</p><a href="5.1.7 My-account-Not-yet-logged-in.html">Log in</a>
	</div>`;
  }
};

document.querySelector("#account-email").innerHTML = localStorage.getItem(
  "logged_in_email"
);

document
  .querySelector("#log_out_button")
  .addEventListener("click", function () {
    localStorage.removeItem("account_state");
    localStorage.removeItem("logged_in_email");
    localStorage.setItem("Airtag", "0");
    localStorage.setItem("Keyboard", "0");
  });
