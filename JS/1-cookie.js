// Check local storage to check to load message or not
switch (localStorage.getItem("cookie_state")) {
  case "accepted":
    break;
  case "rejected":
    break;
  default:
    document.querySelector(
      "#cookie-consent-message"
    ).innerHTML = `<div id="cookie-box">
    <h4>This website uses cookies 🍪</h4>
    <p>
      Marché! Mall uses cookies to ensure a great experience for you. You can
      chose if you consent to the use of cookies and other technologies.
      <a href="https://gdpr.eu/cookies/">Learn more</a>
    </p>
    <div id="cookie-button-group">
      <button id="cookie-okay" onclick="accept_cookie()">Accept</button>
      <a id="cookie-reject" onclick="reject_cookie()">Reject</a>
    </div>
  </div>`;
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
