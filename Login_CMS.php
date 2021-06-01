<html lang="en">
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
        <h1>Log in into CMS</h1>
      </div>
      <form name="loginForm" action="Login_CMS.php">
        <!-- Login -->
        <!-- Username -->
        <div class="styled-input-text">
          <label for="login_username">Username</label><br />
          <input
            type="login_username"
            id="login_username"
            name="login_username"
            placeholder="Username"
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
          <button input type="submit">Log in</button>
        </div>
      </form>

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
</html>