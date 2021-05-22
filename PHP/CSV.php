<?php

// Move to the document root, so that the data files can be taken correctly no matter where the function is called from
chdir($_SERVER["DOCUMENT_ROOT"]);

// Create associative array containing many rows of store/cat./products inside.
function create_associative_array($data)
{
  // Pick which CSV file to run
  switch ($data) {
    case $data == "stores":
      $file = fopen("Data/stores.csv", "r");
      break;
    case $data == "products":
      $file = fopen("Data/products.csv", "r");
      break;
    case $data == "categories":
      $file = fopen("Data/categories.csv", "r");
      break;
    default:
      exit("Pick between 'stores', 'products', 'categories'");
      break;
  }
  $header = fgetcsv($file); // Get the header to use later
  $result = [];
  // While $row = fgetcsv can still be run (isn't false)
  while (($row = fgetcsv($file)) !== false) {
    // Combine the header and the row into an array, then add to result
    // The id of the store/cat./products is the number of the row in the associative array
    $result[$row[0]] = array_combine($header, $row);
  }
  return $result;
}

// Using the associative array, use the ID to get the detail
function get_item($data, $id)
{
  $associative_array = create_associative_array($data);
  $item = $associative_array[$id];
  return $item;
}

echo "<pre>";
$test = create_associative_array("categories");
print_r($test[1]["name"]);
echo "</pre>";
