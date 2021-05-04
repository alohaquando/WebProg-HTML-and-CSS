if (localStorage.getItem("cookie_state") == "accepted") {
  console.log("cookie OK, consent message NOT loaded");
} else {
  console.log("cookie NOT OK, consent message loaded");
  $(function () {
    $("#cookie-consent-message").load("./cookie-consent.html");
  });
}

function accept_cookie() {
  document.getElementById("cookie-consent-message").style.display = "none";
  localStorage.setItem("cookie_state", "accepted");
}
