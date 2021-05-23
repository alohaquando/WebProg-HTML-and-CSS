<?php

function oldest_first($a, $b)
{
    return strtotime($a["created_time"]) - strtotime($b["created_time"]);
}

function newest_first($a, $b)
{
    return strtotime($b["created_time"]) - strtotime($a["created_time"]);
}

function products_sorted_by_time($method)
{
    $products = create_associative_array("products");
    usort($products, $method);
    return $products;
}

function products_sorted_by_time_single_store($method, $store_id)
{
    $products = create_associative_array_matching(
        "products",
        "store_id",
        "stores",
        $store_id,
        "id"
    );
    usort($products, $method);
    return $products;
}
