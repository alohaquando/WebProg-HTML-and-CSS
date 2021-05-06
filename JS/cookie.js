if (localStorage.getItem("cookie_state") == "accepted") {
  console.log("cookie ACCEPTED, consent message NOT loaded");
} else if (localStorage.getItem("cookie_state") == "rejected") {
  console.log("cookie REJECTED, consent message NOT loaded");
  $(function () {
    $("#cookie-consent-message").load("./cookie-consent.html");
  });
} else {
  console.log("cookie NO ACTION YET, consent message loaded");
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
