if (localStorage.getItem("cookie_state") == "accepted") {
} else if (localStorage.getItem("cookie_state") == "rejected") {
  $(function () {
    $("#cookie-consent-message").load("./cookie-consent.html");
  });
} else {
  $(function () {
    $("#cookie-consent-message").load("./cookie-consent.html");
  });
}

function accept_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "accepted");
}

function reject_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "rejected");
}
