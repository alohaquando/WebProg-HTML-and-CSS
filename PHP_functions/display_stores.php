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
