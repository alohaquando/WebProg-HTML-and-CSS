<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Admin Account</title>
    <link href="CSS/main.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/f43db195aa.js"
      crossorigin="anonymous"
    ></script>
  </head>

  <body>
    <header id="nav_header"></header>
    <div class="body_spacing">
      <div class="right"></div>
      <div class="left">
        <form action="action.php" method="get">
          <div id="left">
            <h2>Welcome Admin Register Page!</h2>

            <!-- <div class="items"> -->
            <h4>Create Account</h4>

            <!-- Email -->
            <div class="styled-input-text">
              <label for="username">Admin Username</label><br />
              <input
                type="username"
                id="username"
                name="username"
                placeholder="Username"
                required
              />
              <!-- <small>Invalid Username</small> -->
            </div>


            <!-- passowrd -->
            <div class="styled-input-text">
              <!-- <h5>password</h5> -->
              <label for="password">Password</label>
              <input
                type="password"
                name="password"
                id="password"
                placeholder="Password"
                pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}$"
                required
              />
            </div>

            <!-- confirm passowrd -->
            <div class="styled-input-text">
              <label for="confirmPassword">Confirm password</label>
              <input
                type="password"
                name="con_password"
                id="confirmpassword"
                placeholder="Confirm Password"
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}"
                required
              />
            </div>

            <br />

            </div>
          </div>
          <button input type="submit" id="register-submit" name="submit">
            Create account
          </button>
        </form>
      </div>

      <?php 
      // Display the alert box  
      echo '<script>alert("Please delete this file after creating an admin account")</script>'; 
      ?>

      <div id="right"></div>
      <footer id="mall_footer"></footer>
    </div>

  </body>
  <script src="JS/input.js"></script>
  <script src="JS/global-load-mall-header-and-footer.js"></script>
  <script src="JS/global-load-store-header-and-footer.js"></script>
  <script src="JS/global-mobile-nav.js"></script>
  <script src="JS/global-logged-in-behavior.js"></script>
  <script src="JS/1-cookie.js"></script>
</html>
