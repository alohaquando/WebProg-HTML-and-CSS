<?php
require "PHP_functions/CSV.php";
// require "Data/users.csv";

$registered_users = create_associative_array("users");

if(isset($_SESSION[''])){
get_item)
}

$field = get_field_object();
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
                    <?php
                    php echo 
                    ?>
                    </p>
                    <!-- id="account-email">josephinerachel@gmail.com</p> -->
                    
                </div>
                <div class="col-2">
                    <h5>Phone number</h5>
                    <p>+84 345 342 4323</p>
                </div>
            </div>
        </div>

        <h4>Personal Information</h4>

        <div class="account-profile-pic">
            <img class="profile" src="Asset/avatar.jpg" />
        </div>

        <div class="account-info">
            <div class="row">
                <div class="col-2">
                    <h5>First name</h5>
                    <p>Josephine</p>
                </div>
                <div class="col-2">
                    <h5>Last Name</h5>
                    <p>Rachel</p>
                </div>
                <div class="col-2">
                    <h5>Address</h5>
                    <p>1192 Rosemary Road Courtside</p>
                </div>
                <div class="col-2">
                    <h5>City</h5>
                    <p>Honolulu</p>
                </div>
                <div class="col-2">
                    <h5>Zipcode</h5>
                    <p>69801</p>
                </div>
                <div class="col-2">
                    <h5>Country</h5>
                    <p>United States</p>
                </div>
            </div>
        </div>
        <form action="5.1.7 My-account-Not-yet-logged-in.html">
            <button class="button-secondary" id="log_out_button">Log out</button>
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