<?php

function display_store($store)
{
  echo "<div class=\"col-4 store-card\">";
  echo "<a href=\"StoreHome.php?store_id=$store[id]\">";
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
  echo "<a href=\"ProductDetail.php?product_id=$product[id]\">";
  echo "<img src=\"Asset/product_placeholder_icon.png\" />";
  echo "<h4>$product[name]</h4>";
  $store_name = get_item_field("stores", $product["store_id"], "name");
  echo "<p class=\"CaptionBlackXS\">$store_name</p>";
  echo "<p class=\"CaptionBlackSmall\">\$$product[price]</p>";
  echo "</a> </div>";
}

function display_product_in_cart($product)
{
  $product_detail = get_item("products", $product["id"]);
  $product_store = get_item_field(
    "stores",
    $product_detail["store_id"],
    "name"
  );

  echo "<div class=\"product-in-cart\">
    <img src=\"Asset/product_placeholder_icon.png\" />
    <div class=\"product-in-cart-detail\">
        <h4>$product_detail[name]</h4>
        <p class=\"CaptionBlackXS\">$product_store</p>
        <p class=\"CaptionBlackSmall\">\$$product_detail[price]</p>
        <div class=\"product-in-cart-buttons\">
         <input type=\"number\" step=\"1\" min=\"1\" max=\"99\" required value=\"$product[quantity]\" name=\"$product[id]\" class=\"product-in-cart-value\" onchange=\"update_cart()\" />
        </div>
    </div>
</div>";
}
