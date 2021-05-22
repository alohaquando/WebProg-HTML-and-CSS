<!DOCTYPE html>
<?php
session_start();
require "PHP/CSV.php";

if (isset($_GET["category"])) {
    $selected_category_id = $_GET["category"];
} else {
    $selected_category_id = "0";
}

function display_store($store)
{
    echo "<div class=\"col-4 store-card\">";
    echo "<a href=\"storeHome.php?id=$store[id]\">";
    echo "<img src=\"Asset/store_placeholder_icon_2.png\" />";
    echo "<h4>$store[name]</h4>";
    $category_name = get_item_field("categories", "$store[category_id]", "name");
    echo "<p class=\"CaptionBlackXS\">$category_name</p>";
    echo "</a>";
    echo "</div>";
}
?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Browse Store By Category</title>
    <meta name="description" content="Browse Store By Category" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <!--------Sort Stores-------->
        <div class="row_space_between">
            <div class="HeaderH1_Left_With_Spacing">
                <h1>Store • Sorted by Category</h1>
            </div>
            <form action="StoreByCat.php" method="GET">
                <div class="styled-select">
                    <select name="category" id="category" onchange="this.form.submit()">
                        <option value="0" selected>All category ▾</option>
                        <?php
                        $categories = create_associative_array("categories");
                        foreach ($categories as $category) {
                            switch ($category[id]) {
                            case $selected_category_id:
                              echo "<option selected value=\"$category[id]\">";
                              echo "$category[name]";
                              echo "</option>";
                              break;
                            default:
                              echo "<option value=\"$category[id]\">";
                              echo "$category[name]";
                              echo "</option>";
                              break;
                          }
                        }
                        ?>
                    </select>
                </div>
            </form>
        </div>

        <div class="row">

            <?php
            $stores = create_associative_array("stores");
            switch ($selected_category_id) {
              case null:
              case 0:
                foreach ($stores as $store) {
                    display_store($store);
                }
                break;
              default:
                foreach ($stores as $store) {
                    if ($store["category_id"] = $selected_category_id) {
                        display_store($store);
                    } else {
                    }
                }
                break;
            }
            ?>


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