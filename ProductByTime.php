<!DOCTYPE html>
<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/display.php";
require "PHP_functions/time_sort.php";
require "PHP_functions/dynamic_store_nav.php";

if (isset($_GET["time"])) {
    $selected_time_sort = $_GET["time"];
} else {
    $selected_time_sort = "none";
}

$current_store = $_GET["store_id"];

// Pagination
$current_page = isset($_GET["page"]) ? $_GET["page"] : 1;

// Limit down array to 2 item
function limit_products($products)
{
    $products_limited = array_chunk($products, 2);
    array_unshift($products_limited, "");
    unset($products_limited[0]);
    return $products_limited;
}

// End Pagination
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
                        echo "<input type=\"hidden\" id=\"page\" name=\"page\" value=\"$current_page\">";
                        ?>
                    </select>
                </div>
            </form>

            <div class="row-centered">

                <!-- Product list -->
                <?php
                $count = 0;
                switch ($selected_time_sort) {
                  // When no sorting method is selected
                  case "none":
                    $products = create_associative_array_matching(
                        "products",
                        "store_id",
                        "stores",
                        $current_store,
                        "id"
                    );
                    $total_pages = ceil(count($products) / 2); // Calculate total page
                    $products_limited = limit_products($products);
                    foreach ($products_limited[$current_page] as $product) {
                        display_product($product);
                    }
                    break;

                  // When a sorting method is selected
                  default:
                    $products = products_sorted_by_time_single_store(
                        $selected_time_sort,
                        $current_store
                    );
                    $total_pages = ceil(count($products) / 2); // Calculate total page
                    $products_limited = limit_products($products);
                    foreach ($products_limited[$current_page] as $product) {
                        display_product($product);
                    }
                }
                ?>

                <!-- End product list -->

            </div>

            <!-- Page numbering -->
            <!-- Value like 'store_id' and 'sorting_method' is saved into the URL -->
            <div class="letter-spacing">
                <ul class="letter-spacing">
                    <?php
                    // Previous button
                    switch ($current_page) {
                      case 1:
                        break;
                      default:
                        echo "<li>";
                        $previous_page = $current_page - 1;
                        echo "<a  href=\"ProductByTime.php?page=$previous_page&store_id=$current_store&time=$selected_time_sort\"><</a>";
                        echo "</li>";
                        break;
                    }

                    // Pages
                    foreach (range(1, $total_pages) as $page) {
                        if ($page == $current_page) {
                            echo "<li>";
                            echo "<a class=\"name-selected\" href=\"ProductByTime.php?page=$page&store_id=$current_store&time=$selected_time_sort\">$page</a>";
                            echo "</li>";
                        } else {
                            echo "<li>";
                            echo "<a href=\"ProductByTime.php?page=$page&store_id=$current_store&time=$selected_time_sort\">$page</a>";
                            echo "</li>";
                        }
                    }

                    // Next button
                    switch ($current_page) {
                      case $total_pages:
                        break;
                      default:
                        echo "<li>";
                        $next_page = $current_page + 1;
                        echo "<a href=\"ProductByTime.php?page=$next_page&store_id=$current_store&time=$selected_time_sort\">></a>";
                        echo "</li>";
                        break;
                    }
                    ?>
                </ul>
            </div>
            <!-- End page number -->

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