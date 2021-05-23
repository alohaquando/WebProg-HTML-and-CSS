<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";
?>

<head>
    <meta charset="utf-8" />
    <title>Your Shopping cart!</title>
    <meta name="description" content="Browse Store BCategory" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <form action="5.2.4-Order-Placement-Thank-you.html" method="get">
            <h5>
                <a href="javascript:history.go(-1)">
                    <i class="fas fa-angle-left"></i>
                    ‎ ‏‎ ‏Continue Shopping
                </a>
            </h5>
            <h3>Your cart</h3>
            <div id="cart-list"></div>

            <?php
            display_product_in_cart(1);
            display_product_in_cart(2);
            display_product_in_cart(3);
            display_product_in_cart(4);
            display_product_in_cart(5);
            ?>


            <div id="total-block" class="total-price">
                <hr />
                <h5>Total</h5>
                <h1 id="total">123456</h1>
                <input type="submit" value="Checkout" id="checkout" />
            </div>
        </form>

        <div id="coupon-block" class="styled-input-text">
            <hr />
            <label for="coupon">Coupon</label><br />
            <input type="text" id="coupon" name="coupon" placeholder="Press ENTER to apply your coupon" optional />
            <div id="coupon_status"></div>
            <button class="button-secondary" id="coupon_button">
                Apply coupon
            </button>
        </div>
    </div>
    <footer id="mall_footer"></footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
    <script src="JS/7-add-button.js"></script>
    <script src="JS/8-total-coupon.js"></script>
</body>

</html>