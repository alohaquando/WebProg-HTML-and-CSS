function change_product_value(operator, product_value_id) {
  let product_amount = parseInt(
    document.getElementById(product_value_id).value
  );
  switch (operator) {
    case "+":
      result = product_amount + 1;
      break;
    case "-":
      if (product_amount <= 1) {
        break;
      } else {
        result = product_amount - 1;
        break;
      }
  }
  document.getElementById(product_value_id).value = result;
}
