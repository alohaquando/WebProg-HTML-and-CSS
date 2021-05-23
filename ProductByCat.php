<!DOCTYPE html>
<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";
require "PHP_functions/time_sort.php";
require "PHP_functions/dynamic_store_nav.php";

$current_store = $_GET["store_id"];
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Browse Products by Category</title>
    <meta name="description" content="Browse Products by Category" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script src="JS/load-header-and-footer.js"></script>
    <script src="JS/1-cookie.js"></script>
</head>

<body>
    <header>
        <div id="nav_header"></div>
        <?php load_dynamic_store_header($current_store); ?>
    </header>
    <div class="body_spacing">
        <!--------All Products-------->
        <div class="row_space_between">
            <div class="HeaderH1_Left_With_Spacing">
                <h1>Products • Sorted by Category</h1>
            </div>
            <div class="styled-select">
                <select>
                    <option value="" disabled selected hidden>
                        Showing Products in... ▾
                    </option>
                    <option>All products</option>
                    <option>Appliances</option>
                    <option>Phones and Tablets</option>
                    <option>Beauty and Health Care</option>
                    <option>Fashion</option>
                    <option>Watches and Accessories</option>
                    <option>International Goods</option>
                    <option>Books</option>
                    <option>Sports</option>
                </select>
            </div>

            <div class="row">
                <?php
                $products = create_associative_array_matching(
    "products",
    "store_id",
    "stores",
    $current_store,
    "id"
);
                foreach ($products as $product) {
                    display_product($product);
                }
                ?>

            </div>
        </div>
    </div>
    <footer>
        <?php load_dynamic_store_footer($current_store); ?>
        <div id="mall_footer"></div>
    </footer>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
</body>

</html>