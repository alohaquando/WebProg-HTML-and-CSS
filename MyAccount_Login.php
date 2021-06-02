<?php
require "PHP_functions/CSV.php";
// require "Data/users.csv";

$registered_users = create_associative_array("users");
echo "<pre>";
print_r($registered_users);
echo "</pre>";


$credential = $_POST["credential"];
$password = $_POST["password"];

if (isset($_POST["login"])) {
    foreach ($registered_users as $registered_user) {
        if (
      password_verify($password, $registered_user["password_hashed"]) and
      (strpos($credential, $registered_user["email"]) !== false )){
       // create a cookie that expires after 7 days
            setcookie(
            "loggedin_user",
            $_POST["credential"],
            time() + 60 * 60 * 24 * 7;
            header("location: MyAccount_Logged.php");
      }
       else if(password_verify($password, $registered_user["password_hashed"]) and strpos($credential, $registered_user["phone"]) !== false){
        setcookie(
            "loggedin_user",
            $_POST["credential"],
            time() + 60 * 60 * 24 * 7
            ;

        header("location: MyAccount_Logged.php");
       }
       else {
            $status = "Invalid username/password";
        }
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
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <div class="HeaderH1_Left_With_Spacing">
            <h1>Log in</h1>
            <p>asdASD123!@#</p>
        </div>
        <form name="loginForm" method="post" action="MyAccount_Login.php">
            <!-- Login method -->
            <div class="styled-radio">
                <p>Log in with</p>

                <input type="radio" id="perf_phone" name="perf_contact" value="perf_phone" required checked />
                <label for="perf_phone">Phone</label>

                <input type="radio" id="perf_email" name="perf_contact" value="perf_email" />
                <label for="perf_email">Email</label>
                </div>

            <!-- phone -->
            <div class="styled-input-text">
                <label for="credential">Phone</label><br />
                <input class="credential_phone" name="credential_phone" value = "credential_phone" placeholder="Type your phone" required />

            </div>

            <!-- Email -->
            <div class="styled-input-text">
                <label id = "email" for="credential">Email</label><br />
                <input type = "hidden" class="credential_email" name="credential_email" value = "credential_email" placeholder="Type your email" required />
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
        <p>
            No account yet?<a href="Register.php">
                Create an account</a>
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
</html>

<script type="text/javascript">

var radio = document.getElementsByClassName("styled-radio");
var credential_phone=  document.getElementById("perf_phone");
var credential_email =  document.getElementById("perf_email");

for(var i = 0; i < radio.length; i++) {
   radio[i].onclick = function() {
     var val = this.value;
     if(val == 'perf_phone' ){  
        credential_phone.style.display = 'block';   // show
        internetpayment.style.display = 'none';// hide
     }
     else if(val == 'perf_email'){
         credential_email.style.display = 'none';
         internetpayment.style.display = 'block';
     }    

  }
}
</script>
