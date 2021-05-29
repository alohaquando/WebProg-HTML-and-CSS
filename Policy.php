<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Mall Privacy Policy</title>
    <meta name="description" content="Mall Privacy Policy" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <div class="HeaderH1_Left_With_Spacing">
            <h1>Privacy Policy</h1>
        </div>

        <div class="H4_and_body_17" id="policy">
            <?php readfile("Data/policy.html"); ?>
        </div>
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