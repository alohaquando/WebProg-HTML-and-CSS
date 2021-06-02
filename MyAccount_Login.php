<?php
require "PHP_functions/CSV.php";
$registered_users = create_associative_array("users");

function login($uid)
{
    setcookie("uid", $uid, time() + 60 * 60 * 24 * 7);
    $_SESSION["uid"] = $uid;
    // redirect to login page
    header("location: MyAccount_Logged.php");
}

if (isset($_COOKIE["uid"])) {
    header("location: MyAccount_Logged.php");
}

if (isset($_POST["login"])) {
    $correct = "unknown";
    $password = $_POST["password"];

    switch ($_POST["perf_contact"]) {
    case "perf_phone":
      foreach ($registered_users as $registered_user) {
          if (
          password_verify($password, $registered_user["password"]) and
          strpos($_POST["phone"], $registered_user["phone"]) !== false
        ) {
              login($registered_user["id"]);
              $correct = "yes";
          }
      }
      break;

    case "perf_email":
      foreach ($registered_users as $registered_user) {
          if (
          password_verify($password, $registered_user["password"]) and
          strpos($_POST["email"], $registered_user["email"]) !== false
        ) {
              login($registered_user["id"]);
              $correct = "yes";
          }
      }
      break;
  }
    if ($correct != "yes") {
        echo '<script type="text/JavaScript">
    function display_toast() {
    document.querySelector("#toast-error").style.display = "flex";}
    </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>My account</title>
    <link rel="stylesheet" href="CSS/main.css" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script>
    function show_email() {
        document.querySelector("#login_email").innerHTML = `<div class="styled-input-text">
        <label id="email" for="email">Email</label><br />
        <input type="email" name="email" placeholder="Your email" required />
    </div>`;
        document.querySelector("#login_phone").innerHTML = "";
    }

    function show_phone() {
        document.querySelector("#login_phone").innerHTML = `<div class="styled-input-text">
        <label for="phone">Phone</label><br />
        <input type="tel" pattern="^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$" name="phone" placeholder="Your phone number"  required />
    </div>`;
        document.querySelector("#login_email").innerHTML = "";
    }
    </script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">

        <!-- Toast -->
        <div class="toast-large" id="toast-error">
            <div class="toast-large-elements-error">
                <?php echo "<p id=\"toast-large-message\">The email or phone number is not found. Please try again or start a new session</p>"; ?>
            </div>
        </div>
        <script>
        display_toast()
        </script>

        <!-- Header -->
        <div class="HeaderH1_Left_With_Spacing">
            <h1>Log in</h1>
            <p>
                No account yet?<a href="Register.php">
                    Create an account</a>
            </p>
        </div>

        <form name="loginForm" method="post" action="MyAccount_Login.php">

            <!-- Login method -->
            <div class="styled-radio">
                <p>Log in with</p>
                <input type="radio" id="perf_phone" name="perf_contact" value="perf_phone" onclick="show_phone()" required checked />
                <label for="perf_phone" onclick="show_phone()">Phone</label>
                <br>
                <input type="radio" id="perf_email" name="perf_contact" value="perf_email" onclick="show_email()" />
                <label for="perf_email" onclick="show_email()">Email</label>
            </div>

            <!-- Phone LOGIN FIELD -->
            <div id="login_phone">
                <div class="styled-input-text">
                    <label for="phone">Phone</label><br />
                    <input type="tel" pattern="^\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d([ .-]?)\d?([ .-]?)\d?([ .-]?){9,11}$" name="phone" placeholder="Your phone number" required />
                </div>
            </div>

            <!-- Email LOGIN FIELD -->
            <div id="login_email">

            </div>

            <!-- Password -->
            <div class="styled-input-text">
                <label for="password">Password</label><br />
                <input type="password" id="password" name="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}$" required />
            </div>

            <div class="button-group-for-input">
                <a href="5.1.8-Forgot-password.html">Forgot password?</a>
                <br />
                <button input name="login" type="submit">Log in</button>
            </div>
        </form>

    </div>
    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
    <script src="JS/5-login.js"></script>

</body>

</html>