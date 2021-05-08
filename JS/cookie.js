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

function accept_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "accepted");
}

function reject_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "rejected");
}
