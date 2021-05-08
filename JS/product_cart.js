// Add product to localStorage
function add_to_cart(pName) {
  // Define amount
  let amount = parseFloat(localStorage.getItem(`${pName}`));
  // Switch cases
  switch (localStorage.getItem(`${pName}`)) {
    case null:
      localStorage.setItem(`${pName}`, "1");
      break;
    default:
      amount++;

      localStorage.setItem(`${pName}`, `${String(amount)}`);
      break;
  }
}

// Hide toast
function hide_toast() {
  document.getElementById("toast").style.display = "none";
}

// Show toast after clicking on "add to cart"
function show_toast(pName) {
  document.getElementById("toast").style.display = "flex";
  document.getElementById("toast-message").innerHTML = `Added!
  ${localStorage.getItem(pName)} ${pName} in cart`;
  setTimeout(hide_toast, 5000);
}

// Display content of cart based on localStorage values for products
var cart_list = document.querySelector("#cart-list");

// Add Airtag to cart
switch (localStorage.getItem("Airtag")) {
  case null:
    break;
  default:
    cart_list.innerHTML += `<div class="product-in-cart" id="airtag-in-cart">
    <img src="Asset/airtag3.webp" />
    <div class="product-in-cart-detail">
      <h4>Apple AirTag</h4>
      <p class="CaptionBlackXS">Apple</p>
      <p class="CaptionBlackSmall">799.000 VND</p>
      <div class="product-in-cart-buttons">
        <input
          type="button"
          value="-"
          id="minus_airtag"
          class="value_adjust_button"
          onclick="change_product_value('-','airtag_value')"
        /><input
          type="number"
          step="1"
          min="1"
          max="99"
          required
          value="${localStorage.getItem("Airtag")}"
          class="product-in-cart-value"
          id="airtag_value"
        /><input
          type="button"
          value="+"
          id="plus_airtag"
          class="value_adjust_button"
          onclick="change_product_value('+','airtag_value')"
        />
      </div>
    </div>
  </div>`;
    break;
}

switch (localStorage.getItem("Keyboard")) {
  case null:
    break;
  default:
    cart_list.innerHTML += `<div class="product-in-cart" id="keyboard-in-cart">
    <img src="Asset/keyboard1.jpg" />
    <div class="product-in-cart-detail">
      <h4>Razer Elite Keyboard</h4>
      <p class="CaptionBlackXS">Razer</p>
      <p class="CaptionBlackSmall">1.000.000 VND</p>
      <div class="product-in-cart-buttons">
        <input
          type="button"
          value="-"
          id="minus_keyboard"
          class="value_adjust_button"
          onclick="change_product_value('-','keyboard_value')"
        /><input
          type="number"
          step="1"
          min="1"
          max="99"
          required
          value="${localStorage.getItem("Keyboard")}"
          class="product-in-cart-value"
          id="keyboard_value"
        /><input
          type="button"
          value="+"
          id="plus_keyboard"
          class="value_adjust_button"
          onclick="change_product_value('+','keyboard_value')"
        />
      </div>
    </div>
  </div>`;
    break;
}

if (cart_list.innerHTML == "") {
  cart_list.innerHTML = `
    <div class="cart-text">
    <p>Your cart currently empty</p>
    
    <p>Try adding to cart the "Razer Elite Keyboard" or the "Apple AirTag"</p>
    <a href="5.2.2-BrowseProductCategory.html">View Product</a>
    </div>`;
} else {
  cart_list.innerHTML = `<a id="clear-cart">Clear cart</a>`;
}

function clear_cart() {
  cart_list.innerHTML = `
  <div class="cart-text">
  <p>Your cart currently empty</p>
  
  <p>Try adding to cart the "Razer Elite Keyboard" or the "Apple AirTag"</p>
  <a href="5.2.2-BrowseProductCategory.html">View Product</a>
  </div>`;
  document.querySelector("#clear-cart").style.display = "none";
  localStorage.removeItem("Keyboard");
  localStorage.removeItem("Airtag");
}

document.querySelector("#clear-cart").addEventListener("click", function () {
  clear_cart();
});
