
<?php
session_start();

$id = $_GET["id"];

$_SESSION["cart"][] = $id;

$product = get_product($id);

echo "<pre>";
print_r($product);
echo "</pre>";
function 
?>

