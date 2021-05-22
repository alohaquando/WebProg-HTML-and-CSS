<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require "PHP_functions/CSV.php";
require "PHP_functions/display_stores.php";

if (isset($_GET["character"])) {
    $selected_character = $_GET["character"];
    switch ($selected_character) {
    case "num":
      $character_regex = "/^\d.+$/";
      break;
    default:
      $character_regex = "/^$selected_character.+$/";
      break;
  }
} else {
    $selected_character = "none";
}
?>

<head>
    <meta charset="utf-8" />
    <title>Browse Store By Name</title>
    <meta name="description" content="Browse Store By Name" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/main.css" />
    <script src="https://kit.fontawesome.com/f43db195aa.js" crossorigin="anonymous"></script>
</head>

<body>
    <header id="nav_header"></header>
    <div class="body_spacing">
        <div class="HeaderH1_Left_With_Spacing">
            <h1>Store • Sorted by Name</h1>
        </div>

        <!--------Sort Stores-------->
        <div class="letter-spacing">
            <ul class="letter-spacing">

                <?php
                switch ($selected_character) {
                  case "none":
                    echo "<li><a class=\"name-selected\" href=\"StoreByName.php?\">All</a></li>";
                    echo "<li><a href=\"StoreByName.php?character=num\">#</a></li>";
                    break;
                  case "num":
                    echo "<li><a href=\"StoreByName.php\">All</a></li>";
                    echo "<li><a class=\"name-selected\" href=\"StoreByName.php?character=num\">#</a></li>";

                    break;
                  default:
                    echo "<li><a href=\"StoreByName.php\">All</a></li>
                    <li><a href=\"StoreByName.php?character=num\">#</a></li>";
                }

                foreach (range("A", "Z") as $letter) {
                    if ($letter == $selected_character) {
                        echo "<li>";
                        echo "<a class=\"name-selected\" href=\"StoreByName.php?character=$letter\">$letter</a>";
                        echo "</li>";
                    } else {
                        echo "<li>";
                        echo "<a href=\"StoreByName.php?character=$letter\">$letter</a>";
                        echo "</li>";
                    }
                }
                ?>
            </ul>
        </div>
        <!--------Sort Stores-------->
        <div class="row">

            <?php
            $stores = create_associative_array("stores");
            if (isset($_GET["character"])) {
                foreach ($stores as $store) {
                    if (preg_match($character_regex, $store["name"])) {
                        display_store($store);
                    } else {
                    }
                }
            } else {
                foreach ($stores as $store) {
                    display_store($store);
                }
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