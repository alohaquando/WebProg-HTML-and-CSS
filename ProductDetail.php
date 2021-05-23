<!DOCTYPE html>
<?php
session_start();
$current_product = $_GET["product_id"];
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Product Detail - Razer Elite Keyboard</title>
    <meta name="description" content="Product Detail - Razer Elite Build Keyboard" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
    <script src="JS/logged_in_behavior.js"></script>
</head>

</html>

<body>
    <header>
        <div id="nav_header"></div>
    </header>
    <div class="body_spacing">
        <!-- Main Image -->
        <div class="row">
            <div class="col-2">
                <div class="product-img">
                    <img src="Asset/product_placeholder_icon.png" />
                </div>
            </div>

            <!-- Product Detail Text -->
            <div class="product-detail-text col-2">
                <h1>Razer Elite Keyboard</h1>
                <h4>1.000.000 VND</h4>
                <p class="BodyLight-Black17">
                    Never worry again with the Product. Made from features, the Product lets you to have a good time without problems. Still skeptical? Just try it and if you don't like it within the next 90 days, we'll refund every penny!<br />

                    If you want to have a good time, then you're in the right place. Designed to eliminate worry in record time, the Product was built to be the last solution you ever needed. Best of all, you can to have a good time without problems!<br />
                </p>
                <div class="button-primary-and-secondary" id="product-cart-button">
                    <button type="button" onclick="add_to_cart('Keyboard')">
                        <a href="5.2.3-Shopping-Cart.html">Buy now</a>
                    </button>
                    <button type="button" class="button-secondary" onclick="add_to_cart('Keyboard'); show_toast('Keyboard')">
                        <a>Add to Cart</a>
                    </button>
                </div>
            </div>
        </div>

        <!-- Recommended Products -->
        <br />
        <hr />
        <div class="small-container">
            <h3>Recommended products</h3>
            <div class="row">
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail-AirTag.html">
                        <img src="Asset/airtag4.webp" />
                        <h4>Apple AirTag</h4>
                        <p class="CaptionBlackXS">Apple</p>
                        <p class="CaptionBlackSmall">799.000 VND</p>
                    </a>
                </div>
                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/keyboard3.jpg" />
                        <h4>Razer Cynosa</h4>
                        <p class="CaptionBlackXS">Store C</p>
                        <p class="CaptionBlackSmall">3.000.000 VND</p>
                    </a>
                </div>

                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/headphone4.jpg" />
                        <h4>Razer Nari</h4>
                        <p class="CaptionBlackXS">Store K</p>
                        <p class="CaptionBlackSmall">3.100.000 VND</p>
                    </a>
                </div>

                <div class="col-4 store-card">
                    <a href="5.2.3-ProductDetail.html">
                        <img src="Asset/headphone5.jpg" />
                        <h4>Razer Kaira</h4>
                        <p class="CaptionBlackXS">Store L</p>
                        <p class="CaptionBlackSmall">4.100.000 VND</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div id="mall_footer"></div>
    </footer>

    <!--Notification when cart is added  -->
    <div class="toast" id="toast">
        <div class="toast-elements">
            <p id="toast-message">Added!</p>
            <a href="5.2.3-Shopping-Cart.html">View cart</a>
        </div>
    </div>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>

    <script src="JS/7-add-button.js"></script>
</body>