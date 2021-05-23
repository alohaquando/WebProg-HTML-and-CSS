<!DOCTYPE html>
<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";
require "PHP_functions/time_sort.php";
require "PHP_functions/dynamic_store_header.php";

if (isset($_GET["time"])) {
    $selected_time_sort = $_GET["time"];
} else {
    $selected_time_sort = "none";
}

$current_store = $_GET["store_id"];
?>


<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Browse Product by Created Time</title>
    <meta name="description" content="Browse Product by CreatedTime" />
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
                <h1>Products • Sorted by Created Time</h1>
            </div>
            <form action="ProductByTime.php?" method="GET">
                <div class="styled-select">
                    <select name="time" id="time" onchange="this.form.submit()">
                        <?php
                        switch ($selected_time_sort) {
                          case "newest_first":
                            echo "<option value=\"none\" disabled hidden>
    Browse products by... ▾
</option>
<option selected value=\"newest_first\">Newest First</option>
<option value=\"oldest_first\">Oldest First</option>";
                            break;
                          case "oldest_first":
                            echo "<option value=\"none\" disabled  hidden>
                          Browse products by... ▾
                      </option>
                      <option  value=\"newest_first\">Newest First</option>
                      <option selected value=\"oldest_first\">Oldest First</option>";
                            break;

                          case "none":
                            echo "<option value=\"none\" disabled selected hidden>
                          Browse products by... ▾
                      </option>
                      <option value=\"newest_first\">Newest First</option>
                      <option value=\"oldest_first\">Oldest First</option>";
                            break;
                        }

                        echo "<input type=\"hidden\" id=\"store_id\" name=\"store_id\" value=\"$current_store\">";
                        ?>
                    </select>
                </div>
            </form>

            <div class="row">
                <?php 
                $count=0;
                switch ($selected_time_sort) {
                  case "none":
                    $products = create_associative_array_matching(
                        "products",
                        "store_id",
                        "stores",
                        $current_store,
                        "id"
                    );
                    foreach ($products as $product) {
                        display_product($product);
                        $count++;
                          if ($count == 2) {
                            break;
                          }
                        
                    }
                    break;
                  default:
                    $sorted_products = products_sorted_by_time_single_store(
                        $selected_time_sort,
                        $current_store
                    );
                    foreach ($sorted_products as $product) {
                        display_product($product);
                        $count++;
                          if ($count == 2) {
                            break;
                          }
                    }
                } ?>


            </div>
        </div>
    </div>
    <footer>
        <div id="store_footer"></div>
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