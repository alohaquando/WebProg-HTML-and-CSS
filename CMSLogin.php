<?php

if (file_exists("install.php")) {
    exit(
    "Create an admin account and remove the install.php file before using this website"
  );
}

require "PHP_functions/CSV.php";
$registered_admins = create_associative_array("admins");

function login($aid)
{
    setcookie("aid", $aid, time() + 60 * 60 * 24 * 7);
    $_SESSION["aid"] = $aid;
    // redirect to login page
    header("location: CMS.php");
}

if (isset($_COOKIE["aid"])) {
    header("location: CMS.php");
}

if (isset($_POST["login"])) {
    $correct = "unknown";
    $password = $_POST["password"];
    foreach ($registered_admins as $registered_admin) {
        if (
      password_verify($password, $registered_admin["password"]) and
      strpos($_POST["username"], $registered_admin["username"]) !== false
    ) {
            echo "1";
            login($registered_admin["aid"]);
            $correct = "yes";
        } else {
            echo "2";
        }
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
    <title>CMS Login</title>
    <link rel="stylesheet" href="CSS/main.css" />
    <meta name="viewpoint" content="width=device-width, initial-scale=1" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
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
            <h1>Admin log in</h1>
        </div>

        <form name="loginForm" method="post" action="CMSLogin.php">


            <!-- Phone LOGIN FIELD -->
            <div id="login_username">
                <div class="styled-input-text">
                    <label for="username">Username</label><br />
                    <input type="text" name="username" placeholder="Username" required />
                </div>
            </div>


            <!-- Password -->
            <div class="styled-input-text">
                <label for="password">Password</label><br />
                <input type="password" id="password" name="password" placeholder="Password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@#$%^*])[a-zA-Z\d!@#$%^*]{8,20}$" required />
            </div>

            <div class="button-group-for-input">
                <button input name="login" type="submit">Log in</button>
            </div>
        </form>
    </div>
</body>

</html>