<?php
require "PHP_functions/CSV.php";
$logged_in_user = get_item("users", $_COOKIE["uid"]);

if (isset($_POST["log_out"])) {
    unset($_COOKIE["uid"]);
    setcookie("uid", null, -1, "/");
    header("location: MyAccount_Login.php");
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
            <h1>Welcome back!</h1>
        </div>
        <h4>Account</h4>
        <div class="account-info">
            <div class="row">
                <div class="col-2">
                    <h5>Email</h5>
                    <p>
                        <?php echo "$logged_in_user[email]"; ?>
                    </p>

                </div>
                <div class="col-2">
                    <h5>Phone number</h5>
                    <p>
                        <?php echo "$logged_in_user[phone]"; ?>

                    </p>
                </div>
            </div>
        </div>

        <h4>Personal Information</h4>

        <!-- <div class="account-profile-pic">
            <img class="profile" src="Asset/avatar.jpg" />
        </div> -->

        <div class="account-info">
            <div class="row">
                <div class="col-2">
                    <h5>First name</h5>
                    <p>
                        <?php echo "$logged_in_user[fname]"; ?>

                    </p>
                </div>
                <div class="col-2">
                    <h5>Last Name</h5>
                    <p>
                        <?php echo "$logged_in_user[lname]"; ?>

                    </p>
                </div>
                <div class="col-2">
                    <h5>Address</h5>
                    <p>
                        <?php echo "$logged_in_user[address]"; ?>

                    </p>
                </div>
                <div class="col-2">
                    <h5>City</h5>
                    <p>
                        <?php echo "$logged_in_user[city]"; ?>

                    </p>
                </div>
                <div class="col-2">
                    <h5>Zipcode</h5>
                    <p>
                        <?php echo "$logged_in_user[zipcode]"; ?>

                    </p>
                </div>
                <div class="col-2">
                    <h5>Country</h5>
                    <p>
                        <?php echo "$logged_in_user[country]"; ?>

                    </p>
                </div>
            </div>
        </div>
        <form method="post" action="MyAccount_Logged.php">
            <button class="button-secondary" name="log_out">Log out</button>
        </form>
    </div>

    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
</body>

</html>