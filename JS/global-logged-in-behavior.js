// -----------------------------
// HIDE ITEMS BEFORE LOGGING IN
// -----------------------------

// Hide shopping cart before logged in
switch (localStorage.getItem("account_state")) {
  case "in":
    break;
  default:
    // Hide cart in nav
    // document.querySelectorAll(".cart-access")[0].style.display = "none";
    // document.querySelectorAll(".cart-access")[1].style.display = "none";

    // Change text in mobile nav
    document.querySelector("#account-text").textContent = "Log in";
    document.querySelector("#account-text").href =
      "5.1.7 My-account-Not-yet-logged-in.html";

    // Change avatar on desktop nav
    document.querySelector("#account-img").src = "Asset/avatar-out.png";

    // Change to login page
    document.querySelector("#account-access-desktop").href =
      "5.1.7 My-account-Not-yet-logged-in.html";

    // document.querySelector("#add-to-cart-button").style.display = "none";

    break;
}
