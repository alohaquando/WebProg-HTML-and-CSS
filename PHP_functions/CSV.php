<?php

// Move to the document root, so that the data files can be taken correctly no matter where the function is called from
chdir($_SERVER["DOCUMENT_ROOT"]);

// Create associative array containing many rows of store/cat./products inside.
function create_associative_array($data)
{
    // Pick which CSV file to run
    switch ($data) {
    case "stores":
      $file = fopen("Data/stores.csv", "r");
      break;
    case "products":
      $file = fopen("Data/products.csv", "r");
      break;
    case "categories":
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

// Get the exact field of that item
function get_item_field($data, $id, $field)
{
    $associative_array = create_associative_array($data);
    $item = $associative_array[$id];
    $item_field = $item[$field];
    return $item_field;
}

function create_associative_array_matching(
    $data,
    $field,
    $reference_array,
    $reference_id,
    $reference_field_name
) {
    $all = create_associative_array($data);
    $all_matched = [];
    foreach ($all as $item) {
        if (
      $item[$field] ==
      get_item_field($reference_array, $reference_id, $reference_field_name)
    ) {
            $all_matched[] = $item;
        } else {
        }
    }
    return $all_matched;
}
