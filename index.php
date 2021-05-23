<!DOCTYPE html>
<html lang="en">
<?php
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";
require "PHP_functions/time_sort.php";
require "PHP_functions/dynamic_store_nav.php";
?>

<head>
    <meta charset="utf-8" />
    <title>Mall Home</title>
    <meta name="description" content="Mall Home" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script src="JS/cookie.js"></script>
    <script src="JS/slider.js"></script>
    <script src="JS/userlogin.js.js"></script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <!--------New Stores-------->
        <h3 class="teamtitle">New stores!</h3>
        <div class="small-container">
            <div class="slider">
                <div class="slider-content">
                    <div class="slider-tag">

                        <?php
                        $count = 0;
                        $new_stores = array_sorted_by_time(
                            "newest_first",
                            "stores"
                        );
                        foreach ($new_stores as $store) {
                            display_store($store);
                            $count++;
                            if ($count == 10) {
                                break;
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>
            <!--------End New Stores-------->

            <!--------New Products-------->
            <h3 class="teamtitle">New products!</h3>
            <div class="small-container">
                <div class="slider">
                    <div class="slider-content">

                        <?php
                        $count = 0;
                        $new_products = array_sorted_by_time(
                            "newest_first",
                            "products"
                        );
                        foreach ($new_products as $product) {
                            display_product($product);
                            $count++;
                            if ($count == 10) {
                                break;
                            }
                        }
                        ?>

                    </div>
                </div>
            </div>

            <!--------End New Products-------->

            <!--------Featured Store-------->
            <div class="small-container featured-section">
                <h3 class="teamtitle">Featured stores!</h3>
                <div class="row">

                    <?php
                    $count = 0;
                    $featured_stores = create_associative_array("stores");
                    foreach ($featured_stores as $store) {
                        if ($store["featured"] == "TRUE") {
                            display_store($store);
                            $count++;
                            if ($count == 10) {
                                break;
                            }
                        }
                    }
                    ?>

                </div>
            </div>
            <!--------End Featured Store-------->

            <!--------Featured Products-------->
            <div class="small-container featured-section">
                <h3 class="teamtitle">Featured products!</h3>
                <div class="row">

                    <?php
                    $count = 0;
                    $featured_products = create_associative_array("products");
                    foreach ($featured_products as $product) {
                        if ($product["featured_in_mall"] == "TRUE") {
                            display_product($product);
                            $count++;
                            if ($count == 10) {
                                break;
                            }
                        }
                    }
                    ?>

                </div>
            </div>
            <!--------End Featured Products-------->
        </div>
        <footer id="mall_footer"></footer>
    </div>
    <div id="cookie-consent-message"></div>
    <script src="JS/global-load-mall-header-and-footer.js"></script>
    <script src="JS/global-load-store-header-and-footer.js"></script>
    <script src="JS/global-mobile-nav.js"></script>
    <script src="JS/global-logged-in-behavior.js"></script>
    <script src="JS/1-cookie.js"></script>
</body>

</html>