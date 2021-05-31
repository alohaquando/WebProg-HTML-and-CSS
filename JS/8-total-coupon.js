// Hide total and coupon block function
function hide_total() {
  document.querySelector("#total-block").style.display = "none";
  document.querySelector("#coupon-block").style.display = "none";
}
// show empty state when cart is empty
if (cart_list.innerHTML == "") {
  cart_list.innerHTML = `
    <div class="cart-text">
    <p>Your cart currently empty</p>
    
    <p>Try adding to cart the "Razer Elite Keyboard" or the "Apple AirTag"</p>
    <a href="5.2.2-BrowseProductCategory.html">View Product</a>
    </div>`;
  hide_total();
}
// Add a Clear Cart button if cart is not empty
else {
  cart_list.innerHTML += `<a id="clear-cart">× Clear cart</a>`;
}

// Clear cart, clear localStorage of product, hide Clear Cart button function
function clear_cart() {
  cart_list.innerHTML = `
  <div class="cart-text">
  <p>Your cart currently empty</p>
  
  <p>Try adding to cart the "Razer Elite Keyboard" or the "Apple AirTag"</p>
  <a href="5.2.2-BrowseProductCategory.html">View Product</a>
  </div>`;
  localStorage.setItem("Keyboard", "0");
  localStorage.setItem("Airtag", "0");
  document.querySelector("#total-block").style.display = "none";
  hide_total();
}

// Applying the Clear Cart function to its button
document.querySelector("#clear-cart").addEventListener("click", function () {
  clear_cart();
});

// Product value adjust button
function change_product_value(operator, product_value_id, localStorageID) {
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
  localStorage.setItem(`${localStorageID}`, `${String(result)}`);
  document.getElementById(product_value_id).value = result;
}

// TOTAL
var total_result =
  parseInt(localStorage.getItem("Airtag")) * 799000 +
  parseInt(localStorage.getItem("Keyboard") * 1000000);

// Calculate total function
function calculate_total() {
  total_result =
    parseInt(localStorage.getItem("Airtag")) * 799000 +
    parseInt(localStorage.getItem("Keyboard") * 1000000);
  document.querySelector("#total").innerHTML = `${total_result.toLocaleString(
    "de-DE"
  )} VND`;
}

// Automatically calculate total on page load
calculate_total();

// Update total when product amount adjust button is clicked
const value_adjust_button = document.querySelectorAll(".value_adjust_button");
for (let i = 0; i < value_adjust_button.length; i++) {
  value_adjust_button[i].addEventListener("click", function () {
    calculate_total();
  });
}

// Coupon validate and calculate total function
function couponValidation() {
  let status = document.getElementById("coupon_status");
  let coupon = document.getElementById("coupon");

  switch (coupon.value) {
    case "COSC2430-HD":
      status.textContent = `COSC2430-HD applied! 20% off!`;
      coupon.style.border = "2px solid green";
      discounted = total_result - (total_result * 20) / 100;
      document.querySelector("#total").innerHTML = `${discounted.toLocaleString(
        "de-DE"
      )} VND`;
      break;
    case "COSC2430-DI":
      status.textContent = `COSC2430-DI applied! 10% off!`;
      coupon.style.border = "2px solid green";
      discounted = total_result - (total_result * 10) / 100;
      document.querySelector("#total").innerHTML = `${discounted.toLocaleString(
        "de-DE"
      )} VND`;
      break;
    case "":
      coupon.style.border = "solid 2px rgba(240, 240, 240, 1)";
      status.textContent = ``;
      document.querySelector(
        "#total"
      ).innerHTML = `${total_result.toLocaleString("de-DE")} VND`;
      break;
    default:
      status.textContent = `Invalid coupon`;
      coupon.style.border = "2px solid red";
      document.querySelector(
        "#total"
      ).innerHTML = `${total_result.toLocaleString("de-DE")} VND`;
      break;
  }
}

// Validate coupon on "Enter"
document.getElementById("coupon").addEventListener("keypress", function (e) {
  if (e.key === "Enter") {
    couponValidation();
  }
});

// Adding coupon validation function to the button
document.getElementById("coupon_button").addEventListener("click", function () {
  couponValidation();
});
