// Check local storage to check to load message or not
switch (localStorage.getItem("cookie_state")) {
  case "accepted":
    break;
  case "rejected":
    break;
  default:
    $(function () {
      $("#cookie-consent-message").load("./cookie-consent.html");
    });
    break;
}

// Accept cookie function and write to localStorage
function accept_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "accepted");
}

// Reject cookie function and write to localStorage
function reject_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "rejected");
}
