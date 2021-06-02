<html lang="en">
  <?php
  session_start();

  if (file_exists("install.php")) {
    exit(
      "Create an admin account and remove the install.php file before using this website"
    );
  }
  ?>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Forgot password</title>
    <link rel="stylesheet" href="CSS/main.css" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
    <script src="JS/load-header-and-footer.js"></script>
    <script src="JS/1-cookie.js"></script>
  </head>
  <body>
    <header id="nav_header"></header>
    <div class="body_spacing">
      <h5>
        <a href="5.1.7 My-account-Not-yet-logged-in.html">
          <span class="checkicon2"><i class="fas fa-angle-left"></i> </span>
          Back to login
        </a>
      </h5>
      <h2>Forgot your password?</h2>
      <p>Enter your email and get your account back in just seconds</p>
      <form action="action.php" method="get">
        <div class="styled-input-text">
          <input
            type="email"
            placeholder="example@email.com"
            name="email"
            pattern="/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/"
          />
        </div>
        <button type="submit" name="button">Reset link</button>
      </form>
    </div>
    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
  </body>
</html>
