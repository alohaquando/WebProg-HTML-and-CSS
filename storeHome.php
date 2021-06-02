<!DOCTYPE html>
<?php
session_start();
if (file_exists("install.php")) {
    exit(
    "Create an admin account and remove the install.php file before using this website"
  );
}
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";
require "PHP_functions/time_sort.php";
require "PHP_functions/dynamic_store_nav.php";

$current_store = $_GET["store_id"];
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Store Home</title>
    <meta name="description" content="Store Home" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
    <script>
    </script>
</head>


<body>
    <header>
        <div id="nav_header"></div>
        <?php load_dynamic_store_header($current_store); ?>
    </header>

    <div class="body_spacing">
        <!--------New Products-------->
        <div class="small-container">
            <h3 class="teamtitle">New products!</h3>
            <div class="row">
                <?php
                $count = 0;
                $sorted_products = products_sorted_by_time_single_store(
                    "newest_first",
                    $current_store
                );
                foreach ($sorted_products as $product) {
                    display_product($product);
                    $count++;
                    if ($count == 5) {
                        break;
                    }
                }
                ?>
            </div>
        </div>
        <!--------Featured Products-------->
        <div class="small-container featured-section featured-store-color">
            <h3 class="teamtitle">Featured products!</h3>
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
                    if ($product["featured_in_store"] == "TRUE") {
                        display_product($product);
                    }
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
    <script>
    var store_name = "<?php echo $store_name; ?>";
    document.querySelector("#store_name").innerHTML = store_name;
    </script>
</body>

</html>