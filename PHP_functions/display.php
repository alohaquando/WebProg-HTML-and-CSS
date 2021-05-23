<?php

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

function display_product($product)
{
    echo "<div class=\"col-4 store-card\">";
    echo "<a href=\"ProductDetail.php?id=$product[id]\">";
    echo "<img src=\"Asset/product_placeholder_icon.png\" />";
    echo "<h4>$product[name]</h4>";
    $store_name = get_item_field("stores", $product["store_id"], "name");
    echo "<p class=\"CaptionBlackXS\">$store_name</p>";
    echo "<p class=\"CaptionBlackSmall\">\$$product[price]</p>";
    echo "</a> </div>";
}
