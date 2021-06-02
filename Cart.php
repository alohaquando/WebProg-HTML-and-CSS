<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";

function calculate_total()
{
    $total = 0;
    if (isset($_SESSION["cart"])) {
        $cart = $_SESSION["cart"];
        foreach ($cart as $product_in_cart) {
            $price = get_item_field("products", $product_in_cart["id"], "price");
            $quantity = $product_in_cart["quantity"];
            $single_product_total = $price * $quantity;
            $total += $single_product_total;
        }
    }
    return $total;
}

// Test

if (isset($_POST["value_adjust"])) {
    foreach ($_SESSION["cart"] as $product) {
        $_SESSION["cart"][$product["id"]]["quantity"] = $_POST[$product["id"]];
    }
}

if (isset($_POST["checkout"])) {
    if (isset($_COOKIE["uid"])) {
        header("location: 5.2.4-Order-Placement-Thank-you.html");
    } else {
        header("location: Register.php");
    }
}
?>

<head>
    <meta charset="utf-8" />
    <title>Your Shopping cart!</title>
    <meta name="description" content="Browse Store BCategory" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script>
    function update_cart() {
        document.querySelector("#cart_update").click()
    }
    </script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <h5>
            <a href="javascript:history.back()">
                <i class="fas fa-angle-left"></i>
                ‎ ‏‎ ‏Continue Shopping
            </a>
        </h5>
        <h3>Your cart</h3>

        <div id="cart-list">
            <form method="POST" action="Cart.php">
                <?php if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
    foreach ($cart as $product_in_cart) {
        display_product_in_cart($product_in_cart);
    }
} else {
    echo "<p>Your cart is empty</p>";
} ?>
                <input type="submit" id="cart_update" name="value_adjust" hidden>
            </form>
        </div>

        <div id="total-block" class="total-price">
            <hr />
            <h5>Total</h5>
            <h1>$</h1>
            <h1 id="total_shown">
                <?php
                $total = calculate_total();
                echo $total;
                ?>
            </h1>

            <?php
            $total = calculate_total();
            echo "<input hidden id=\"total\" value=\"$total\" />";
            ?>

            <script>
            document.querySelector("#total_shown").innerHTML = `${parseFloat(document.querySelector("#total").value).toLocaleString(
                                        "en-US")}`;
            </script>
        </div>

        <form method="post" action="Cart.php">
            <input type="submit" name="checkout" value="Checkout" id="checkout" />
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