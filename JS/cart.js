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

function couponValidation() {
  let status = document.getElementById("coupon_status");
  let coupon = document.getElementById("coupon");

  switch (coupon.value) {
    case "COSC2430-HD":
      status.textContent = `COSC2430-HD applied! 20% off!`;
      coupon.style.border = "2px solid green";
      break;
    case "COSC2430-DI":
      status.textContent = `COSC2430-DI applied! 10% off!`;
      coupon.style.border = "2px solid green";
      break;
    case "":
      coupon.style.border = "solid 2px rgba(240, 240, 240, 1)";
      status.textContent = ``;
      break;
    default:
      status.textContent = `Invalid coupon`;
      coupon.style.border = "2px solid red";

      break;
  }
}

document.getElementById("coupon").addEventListener("keypress", function (e) {
  if (e.key === "Enter") {
    couponValidation();
  }
});

document.getElementById("coupon_button").addEventListener("click", function () {
  couponValidation();
});
