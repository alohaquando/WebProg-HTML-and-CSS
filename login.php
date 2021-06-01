<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>My account</title>
    <link rel="stylesheet" href="CSS/main.css" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <header id="nav_header"></header>
    <div class="body_spacing">
      <div class="HeaderH1_Left_With_Spacing">
        <h1>Log in</h1>
      </div>
      <form name="loginForm" action="5.1.7-My-account-Logged-in.html">
        <!-- Login method -->
        <div class="styled-radio">
          <p>Log in with</p>
          <input
            type="radio"
            id="login_method_email"
            name="login_method"
            value="login_method_email"
            required
            checked
          />
          <label for="login_email">Email</label>
          <br /><input
            type="radio"
            id="login_method_phone"
            name="login_method"
            value="login_method_phone"
            disabled
          />
          <label for="login_phone">Phone</label>
        </div>

        <!-- Email -->
        <div class="styled-input-text">
          <label for="login_email">Email</label><br />
          <input
            type="login_email"
            id="login_email"
            name="login_email"
            placeholder="youremail@domain.com"
            pattern="(([^<>()[\]\\.,;:\s@\x22]+(\.[^<>()[\]\\.,;:\s@\x22]+)*)|(\x22.+\x22))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,5}))"
            ;
            required
          />
        </div>

        <!-- Password -->
        <div class="styled-input-text">
          <label for="login_password">Password</label><br />
          <input
            type="password"
            id="login_password"
            name="login_password"
            placeholder="Password"
            pattern="password"
            required
          />
        </div>

        <div class="button-group-for-input">
          <a href="5.1.8-Forgot-password.html">Forgot password?</a>
          <br />
          <button input type="submit">Log in</button>
        </div>
      </form>
      <p>
        No account yet?<a href="5.1.9-Register-Account.html">
          Create an account</a
        >
      </p>
    </div>
    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
    <script src="JS/5-login.js"></script>
  </body>